<?php 

class MyAccount extends Controller {

    function __construct() {
        parent::__construct();
        
    }

    public function index() {   
		$this->view->title =   'Your Account, Profile and Genius Rewards ' ;
		$this->view->render('booking/dashboard');
    }
    public function signin($ownUrl = '') {
    $this->view->ownUrl = $ownUrl;   
		$this->view->title =   'Sign in or create an account' ;
		$this->view->render('booking/login');
    }
    
    







    //////////////////////////////////////////////////

}
