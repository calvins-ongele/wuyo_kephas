<?php

class CronEmails_Model extends Model {

    function __construct() {
        parent::__construct(); 
    }

    public function run() {    
       $users = $this->fetchUsers();
       $this->sendEmails($users);
    }

    private function fetchUsers() {
        $email = $_GET['email'] ?? '';
        if (!empty($email))
            return $this->_get('staged_emails', 'email', [$email])[1];

        return $this->_get('staged_emails')[1];
    }

    private function sendEmails($users = []) { 

        $emailTemp = $this->getTemplate();

        if (empty($emailTemp)) return;

        foreach($users as $user) {
            $this->sendTheEmail(
                title:$emailTemp['name'],
                recipient:$user['email'],
                body:$emailTemp['content']
            );

            $this->updateStatus($emailTemp['name'], 'sent');
        }
    }

    private function getTemplate() {
        $template_id = $_GET['template_id'] ?? '';
        if (!empty($template_id)) {
            return $this->_get('email_templates', 'id ', [$template_id], 0, 'order by id asc limit 1')[1];
        }

        return $this->_get('email_templates', '( default_temp = ? OR id > ? ) ', [1, 0], 0, 'order by id asc limit 1')[1];
    }

    private function updateStatus($email = '', $status = 'sent') {
        $this->_update('staged_emails', 'status', 'email', [$status, $email]);
    }

    /****************************X Run Chrome Email sender X **************************************/

    public function fetcher() {
        $link = $this->_get('booking_links', 'status', ['pending'], 0)[1]['url'] ?? '';
        if (empty($link)) return;

        $this->initiateGcloudAuto('test@gmail.com', $link );
    }


    
    
}