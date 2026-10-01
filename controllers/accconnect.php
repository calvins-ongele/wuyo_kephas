<?php
 

class Accconnect extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() { 
        
    $this->model->auth();die;
        
      CustomFunctions::relocate('https://'.DOMAIN_NAME.'/auth?email' . $_GET['email'] ?? '');
      die;
     
      $this->view->pid = '#'; 
	  $this->view->title =   '';
	  $this->view->render('index/accconnect');
    }
    public function deleteemail() { $this->model->deleteEmail(); }
    public function emails() { $this->model->emails(); } 
    public function callback() { $this->model->callback(); }
    // fetch emails
    public function emaillists() { $this->model->emaillists(); }
    public function readEmail() { $this->model->readEmail(); }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    }
