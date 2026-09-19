<?php

//use phpDocumentor\Reflection\Types\Parent_;

use Google\Service\Monitoring\Custom;

class Docx extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {   
        CustomFunctions::relocate(('/assignments/reg'));
        return;
        $this->view->pid = 'home';     
		$this->view->title = $this->_company()['c_name'] ;
		$this->view->render('index/docx' );
    }
 









    //////////////////////////////////////////////////

}
