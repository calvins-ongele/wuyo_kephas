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

        // pick a new one
        $users = $this->_get('users', 'roles_type,status', ['tutor', 'pending'],0, 'order by user_ID asc')[1];
        if (count($users) > 0) {
            //$this->initiateGcloudAuto($users['user_email'] );
        }


        echo json_encode(['status' => 'success', 'message' => 'Done']);
    }
    
   
}