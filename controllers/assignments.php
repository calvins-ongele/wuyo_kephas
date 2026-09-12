<?php

class Assignments extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $this->view->render("index");
    }

    public function pdf() {
        $this->view->title = "Real World Conversation: Navigating Everyday Situations {$this->_company()['c_name']}";
        $this->view->render("pdf/edit");
    }

    public function reg() {
        $this->view->title = "Student's Assistance Portal";
        $this->view->render("pdf/assistance");
    }
    public function agreement() {
        $this->view->title = "Student's Assistance Portal";
        $this->view->render("pdf/agreement");
    }
    public function signin() {
        $this->view->title = "Student's Assistance Portal";
        $this->view->render("pdf/signin");
    }











}