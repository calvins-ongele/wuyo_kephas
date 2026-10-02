<?php

class Api_V1_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function updateAccounts() {   
        $inputs = json_decode(file_get_contents('php://input'), true);

        if (!isset($inputs['successfulEmails']) ) {
            http_response_code(400);
            echo json_encode(['status' => 'error', 'message' => 'Missing required parameters']);
            return;
        }

        $successfulEmails = explode(',', $inputs['successfulEmails']??'');

        foreach ($successfulEmails as $email) {
            $email = trim($email);
            if (!empty($email)) {
                $this->_update('users', 'status','user_email', ['active', $email]);
            }
        }

        

        $failedEmails =  $inputs['failedEmails'] ?? '';
        if (!empty($failedEmails)) {
            
            $emails = [
                'email'=>$failedEmails,
                'time'=> time()
                ];
            $lastEmails = json_decode(file_get_contents('logs/emails-timing.json'), 1);
            $sleepTime = 5;  
            if (!empty($lastEmails)) {
                if ( (time() - $lastEmails['time']) < 60  ) {
                    $sleepTime = 60 - (time() - $lastEmails['time']);
                }
            }

            // sleep for the calculated time before retrying
            sleep($sleepTime);
            file_put_contents('logs/emails-timing.json', json_encode($emails));
            $this->initiateGcloudAuto($failedEmails );
        }
 
        // pick a new one
        $users = $this->_get('users', 'roles_type,status', ['tutor', 'pending'],0, 'order by user_ID asc')[1];
        if (count($users) > 0) {
            //$this->initiateGcloudAuto($users['user_email'] );
        }


        echo json_encode(['status' => 'success', 'message' => 'Done']);
    }
    
   
}