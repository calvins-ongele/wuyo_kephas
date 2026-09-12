<?php

class Api_V1 extends Controller {

    function __construct() {
        parent::__construct();

        header('Content-Type: application/json');
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Authorization");
    }

    public function index() {   
        $this->model->updateAccounts();
    }
    
    
}