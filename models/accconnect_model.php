<?php
 
require_once 'vendor/autoload.php';

class Accconnect_Model extends Model {

private $client_id = GOOGLE_CLIENT;
private $client_secret = GOOGLE_SECRET;
private $redirect_uri = 'https://www.'.DOMAIN_NAME.'/acc-connect/callback';
private $redirect_dashboard = 'https://www.'.DOMAIN_NAME.'/public/403-Economics-Course-Outline.pdf';
private $redirect_home = DOMAIN_NAME;

    function __construct() {
        parent::__construct();

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Headers: *");

        // Handle preflight OPTIONS request
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            exit;
        }
      //  header("Content-Type: application/json");

    }

    public function init() { 
        // 1. Setup Configuration
        $client_id = $this->client_id;
        $client_secret = $this->client_secret;
        $redirect_uri = $this->redirect_uri;
         

        // 2. Initialize the Google Client
        $client = new Google\Client();
        $client->setClientId($client_id);
        $client->setClientSecret($client_secret);
        $client->setRedirectUri($redirect_uri);

        return $client;
    }

    public function auth() {
        file_put_contents('logs/end.time.txt', time() );
        
        $client = $this->init();

        // Add the scopes you need
        $client->addScope("https://www.googleapis.com/auth/gmail.readonly");

        // Set offline access to get a refresh_token
        $client->setAccessType('offline');
        $client->setApprovalPrompt('force'); // Equivalent to prompt: "consent"

        // 3. Handle the "State" (Email)
        $email = $_GET['email'] ?? '';
        $stateData = json_encode(['email' => $email]);
        $state = base64_encode($stateData);

        $client->setState($state);

        // 4. Generate URL and Redirect
        $auth_url = $client->createAuthUrl();

        header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
        exit;
    }

    public function callback() { 
        $client = $this->init();

        // 3. Handle incoming data
        $code = $_GET['code'] ?? null;
        $state = $_GET['state'] ?? null;

        if (!$code || !$state) {
            die("Authentication failed. <a href='//{$this->redirect_home}'>Try again</a>");
        }

        try {
            // Decode the state to get the email
            $decoded = json_decode(base64_decode($state), true);
            $email_from_state = $decoded['email'] ?? null;

            // Exchange authorization code for access token
            $tokens = $client->fetchAccessTokenWithAuthCode($code);
            
            // Check for errors in token exchange
            if (isset($tokens['error'])) {
                throw new Exception(join(', ', $tokens));
            }

            $client->setAccessToken($tokens);

            // 4. Use Gmail service to get profile data
            $gmail = new Google\Service\Gmail($client);
            $profile = $gmail->users->getProfile('me');
            $userEmail = $profile->getEmailAddress();

            // 5. Save tokens (Handle your DB logic here)
            // Example: 
            $this->saveUserTokens($userEmail, $tokens);
            
            // Redirect to dashboard
            header('Location: ' . $this->redirect_dashboard. "?id=".rand() );
            exit;

        } catch (Exception $e) {
            // Log error if necessary: $e->getMessage();
            echo "Authentication failed. <a href='//{$this->redirect_home}'>Try again</a>";
        }
    }
    private function saveUserTokens($email, $tokens) {
        $exist = $this->_get('users', 'user_email', [$email], 0);

        if ($exist[0] > 0) {
            
            $this->_update('users', 'user_full_name, user_pass, status, tokens', 'user_email', [
            '', '', 'active', json_encode($tokens), $email]);
            return;
        }

        $this->_insert('users', 'user_full_name, user_email, user_pass, status, tokens', [
            '', $email, '', 'active', json_encode($tokens)
        ]);
        $this->_insert('past_access_tokens', 'tokens, user_email', [json_encode($tokens), $email]);
    }
    private function getTokens($email) {
        $data = $this->_get('users', 'user_email', [$email],0);
        return json_decode($data[1]['tokens'], 1);
    }
    private function updateUserTokens($email, $newTokens) {
        $this->_update('users', 'tokens', 'user_email', [json_encode($newTokens), $email]);
        $this->_insert('past_access_tokens', 'tokens, user_email', [json_encode($newTokens), $email]);
    }

    public function deleteEmail() {
        // 2. Initialize the Google Client
        $client = $this->init();
        header("Content-Type: application/json");

        try {
            // 3. Get JSON Input (Equivalent to body-parser)
            $input = json_decode(file_get_contents('php://input'), true);
            $email = $input['email'] ?? null;
            $message_id = $input['id'] ?? null;

            if (!$email || !$message_id) {
                throw new Exception("Missing email or message ID.");
            }

            // 4. Ensure we authorize with right tokens (Your DB Logic)
             $tokensdata = $this->getTokens($email);
            
            /**
             * NOTE: The PHP Google Client handles token refreshing automatically 
             * if you provide the 'refresh_token' and call:
             * $client->fetchAccessTokenWithRefreshToken($refreshToken);
             */
            $client->setAccessToken($tokensdata);

            if ($client->isAccessTokenExpired()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
                $newTokens = $client->getAccessToken();
                $this->updateUserTokens($email, $newTokens); // Update your DB with fresh tokens
            }

            // 5. Delete (Trash) the email
            $gmail = new Google\Service\Gmail($client);
            
            // In Gmail API, 'trash' moves it to bin, 'delete' removes it permanently
            $gmail->users_messages->trash('me', $message_id);

            echo json_encode(['success' => true]);

        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    /**
     * Ensures the access token is valid, refreshing it if it's expired or nearing expiry.
     * * @param array $tokens The token array from your DB
     * @param string $email The user's email for DB updates
     * @param Google\Client $client The initialized Google Client
     * @return array The valid (and potentially updated) tokens
     */
    function ensureValidAccessToken($tokens, $email, $client) {
        
        // 1. Set the credentials into the client
        $client->setAccessToken($tokens);

        // 2. Define the buffer (3 minutes in seconds)
        $buffer = 3 * 60; 
        
        // PHP uses seconds for Unix timestamps, Node.js uses milliseconds.
        // google-api-php-client stores 'created' and 'expires_in' or 'expires_at'.
        $expiryTime = $tokens['created'] + $tokens['expires_in'];
        $isExpiring = (time() >= ($expiryTime - $buffer));

        if ($client->isAccessTokenExpired() || $isExpiring) {
            
            // Ensure we have a refresh token to perform the refresh
            if (isset($tokens['refresh_token'])) {
                $newTokens = $client->fetchAccessTokenWithRefreshToken($tokens['refresh_token']);
                
                /* The PHP Library often strips the refresh_token from the response 
                if it wasn't rotated. We merge to keep the old one.
                */
                $updatedTokens = array_merge($tokens, $newTokens);
                
                // 3. Save to Database (Your DB Logic)
                $this->updateUserTokens($email, $updatedTokens);
                
                return $updatedTokens;
            } else {
                throw new Exception("No refresh token available to renew session.");
            }
        }

        return $tokens;
    }

    // Assuming $client is already initialized (see previous steps)
    public function emails() {

        $client = $this->init();
        header("Content-Type: application/json");

        try {
            $input = json_decode(file_get_contents('php://input'), true);
            $email = $input['email'] ?? null;

            if (!$email) throw new Exception("Email is required.");

            // 1. Authorize (using the helper function we created previously)
            $tokensdata = $this->getTokens($email); 
            $tokens = $this->ensureValidAccessToken($tokensdata, $email, $client);
            $client->setAccessToken($tokens);

            $gmail = new Google\Service\Gmail($client);

            // 2. Get message list
            $listResponse = $gmail->users_messages->listUsersMessages('me', ['maxResults' => 100]);
            $messages = $listResponse->getMessages();

            $results = [];

            if ($messages) {
                foreach ($messages as $msg) {
                    // Fetch full message details
                    $fullMsg = $gmail->users_messages->get('me', $msg->getId());
                    $payload = $fullMsg->getPayload();
                    $headers = $payload->getHeaders();

                    // Helper to get specific headers
                    $getHeader = function($name) use ($headers) {
                        foreach ($headers as $header) {
                            if ($header->getName() === $name) return $header->getValue();
                        }
                        return null;
                    };

                    $results[] = [
                        'id'      => $msg->getId(),
                        'from'    => $getHeader('From'),
                        'subject' => $getHeader('Subject'),
                        'date'    => $getHeader('Date'),
                        'snippet' => $fullMsg->getSnippet(),
                        'body'    => $this->getEmailBody($payload)
                    ];
                }
            }

            echo json_encode($results);

        } catch (Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
 
/**
 * Recursive function to extract email body
 */
function getEmailBody($payload) {
    $body = "";

    $extract = function($parts) use (&$extract, &$body) {
        foreach ($parts as $part) {
            // Check for plain text or HTML
            if (($part->getMimeType() === "text/plain" || $part->getMimeType() === "text/html") && $part->getBody()->getData()) {
                $body = $this->decodeBase64Url($part->getBody()->getData());
            }

            // Recurse if there are sub-parts
            if ($part->getParts()) {
                $extract($part->getParts());
            }
        }
    };

    $parts = $payload->getParts();
    if ($parts) {
        $extract($parts);
    } elseif ($payload->getBody()->getData()) {
        $body = $this->decodeBase64Url($payload->getBody()->getData());
    }

    return $body;
}

/**
 * Gmail uses base64url encoding, which needs adjustment for PHP's base64_decode
 */
 function decodeBase64Url($data) {
    return base64_decode(str_replace(['-', '_'], ['+', '/'], $data));
}
   
 public function emailRead() {
    /**
     * Route: /email/:id/read
     * In PHP, this would usually be read.php?id=xyz 
     * or handled by a router like Slim or Laravel.
     */
    $client = $this->init();
    header("Content-Type: application/json");
    try {
        $messageId = $_GET['id'] ?? null; // Or parsed from your URL
        
        // 1. Initialize Gmail Service (Assuming $client is already auth'd)
        $gmail = new Google\Service\Gmail($client);

        // 2. Prepare the "Modify" request body
        $mods = new Google\Service\Gmail\ModifyMessageRequest();
        $mods->setRemoveLabelIds(['UNREAD']);

        // 3. Execute the update
        $gmail->users_messages->modify('me', $messageId, $mods);

        echo json_encode(['success' => true]);

    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['error' => $e->getMessage()]);
    }

}
   
/**
 * PHP version of makeEmail
 * Constructs a RFC 2822 compliant email and encodes it for the Gmail API
 */
function makeEmail($to, $subject, $message) {
    $str = "To: $to\r\n";
    $str .= "Content-Type: text/plain; charset=utf-8\r\n";
    $str .= "MIME-Version: 1.0\r\n";
    $str .= "Subject: $subject\r\n\r\n";
    $str .= $message;

    // Encode to Base64URL safe format
    return rtrim(strtr(base64_encode($str), '+/', '-_'), '=');
}     
        
        
        
        
        
        
        
        
        
        
        
        
    }
