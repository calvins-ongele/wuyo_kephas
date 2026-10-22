<?php

class CronEmails extends Controller {

    function __construct() {
        parent::__construct(); 
    }

    public function index() {   
        $this->model->run();
    }

    public function fetcher() {
        $this->model->fetcher();
    }
    
    
}