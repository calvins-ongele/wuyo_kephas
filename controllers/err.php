<?php

class Err extends Controller {

	function __construct() {
		parent::__construct();
		Session::initialize();
	}
	
	function index() { 
        $this->view->hstyles = array();
		$this->view->_company = array('c_name'=>$_SERVER['SERVER_NAME'], 'c_logo'=>'1.png', 'c_tel'=>'07');//$this->_company();
		$this->view->title = '404 Error';
		//$this->view->render('public/includes/header.inc.php', true);
		$this->view->render('err/index', true);
		//$this->view->render(getenv('DOCUMENT_ROOT') . '/public/includes/footer.inc', true);
	}

}