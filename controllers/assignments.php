<?php

class Assignments extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        CustomFunctions::relocate('/assignments/reg');
      $this->view->render("index");
    }

    public function pdf() {
        $this->view->title = "Real World Conversation: Navigating Everyday Situations {$this->_company()['c_name']}";
        $this->view->render("pdf/edit");
    }

    public function reg($url = '') {
        $this->view->url = $url;
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
    public function view($url = '') {
        $assignmets = $this->model->assignments($url);
        $this->view->assignment = $assignmets;
        $this->view->title = json_decode($this->view->assignment[0]['data'],1)['title'] ;
        $this->view->title = "Student's Assistance Portal";
        $this->view->render("pdf/final");
    }











}