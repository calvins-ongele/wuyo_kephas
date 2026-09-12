<?php

//use phpDocumentor\Reflection\Types\Parent_;

class Docx extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {   
        $this->view->pid = 'home';     
		$this->view->title = $this->_company()['c_name'] ;
		$this->view->render('index/docx' );
    }
 









    //////////////////////////////////////////////////

}
