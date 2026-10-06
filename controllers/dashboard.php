<?php 
#[AllowDynamicProperties]
class Dashboard extends Controller {
    public function __construct()
    {
        parent::__construct();
        Session::initialize();
        Auth::handleLogin();
    }

    public function index() {     
        $this->view->pid = 'home'; 
        $this->view->title = ' Dashboard ' ;
        $this->view->doIOwnIt = $this->model->doIOwnIt($_GET['email'] ?? '');
        $this->view->data = []; //empty($_GET['email']) ? [] :$this->model->getemails($_GET['email'] ?? '');
        $this->view->render(PROFILE_NAV.'/index2');
    } 
    
    public function emails($emails = '') {
        
        $this->view->pid = $emails; 
        $this->view->data = $this->model->getemails($emails);
        $this->view->title = 'Emails ' ;
        $this->view->render(PROFILE_NAV.'/emails');
    }

    public function accounts($emails = '') {
        
        $this->view->pid = 'accounts'; 
        $this->view->accounts = $this->model->accounts();
        //$this->view->data = $this->model->getemails($emails);
        $this->view->title = 'Accounts ' ;
        $this->view->render(PROFILE_NAV.'/accounts');
    }
    public function automations($emails = '') {
        
        $this->view->pid = 'automations'; 
        $this->view->title = 'Automations ' ;
        $this->view->render(PROFILE_NAV.'/automations');
    }
    
    public function sendemail($emails = '') {
        
        $this->view->pid = 'sendemail'; 
        $this->view->templates = $this->model->getTemplates();
        $this->view->title = 'Send Email ' ;
        $this->view->render(PROFILE_NAV.'/sendemail');
    }
    
    public function staged($emails = '') {
        
        $this->view->pid = 'staged'; 
        $this->view->accounts = $this->model->stagedAccounts($_GET['filter'] ?? '');
        //$this->view->data = $this->model->getemails($emails);
        $this->view->title = 'Staged ' ;
        $this->view->render(PROFILE_NAV.'/staged');
    }  
    public function settings($emails = '') {
        
        $this->view->pid = 'settings'; 
        //$this->view->data = $this->model->getemails($emails);
        $this->view->users = $this->model->totalUsers();
        $this->view->roles = $this->model->fetchRoles();
        $this->view->accounts = $this->model->totalUsers('tutor');
        $this->view->courses = $this->model->getCourses();
        $this->view->assignments = $this->model->assignments();
        $this->view->title = 'Settings ' ;
        $this->view->render(PROFILE_NAV.'/settings');
    }  

    public function assignmentspdf($id = 0) { 
        $assignmets = $this->model->assignments($id);
        $this->view->assignment = $assignmets;
        $this->view->title = json_decode($this->view->assignment[0]['data'],1)['title'] ;
        $this->view->render(PROFILE_NAV.'/new-pdf');
    }
    
    
    
     
    public function pdf() {  
        $this->view->pid = 'pdf';
        
        $this->view->title = 'Generate PDF';
        $this->view->render(PROFILE_NAV . '/pdf');
    }
 
    public function logout() {
        Session::destroy();
        if (!isset($_GET['message'])) CustomFunctions::relocate('/a0');
        else CustomFunctions::relocate('/account?message=' . urlencode($_GET['message'] ?? '')  );
    }


















    ///////////////////
}
