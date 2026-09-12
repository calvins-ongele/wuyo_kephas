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

        $successfulEmails = explode(',', $inputs['successfulEmails']);

        foreach ($successfulEmails as $email) {
            $email = trim($email);
            if (!empty($email)) {
                $this->_update('users', 'status','user_email', ['active', $email]);
            }
        }

        echo json_encode(['status' => 'success', 'message' => 'Done']);
    }
    
   
}