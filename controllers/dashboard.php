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
        $this->view->data = empty($_GET['email']) ? [] :$this->model->getemails($_GET['email'] ?? '');
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
        //$this->view->data = $this->model->getemails($emails);
        $this->view->title = 'Automations ' ;
        $this->view->render(PROFILE_NAV.'/automations');
    }
    
    public function staged($emails = '') {
        
        $this->view->pid = 'staged'; 
        $this->view->accounts = $this->model->accounts($_GET['filter'] ?? '');
        //$this->view->data = $this->model->getemails($emails);
        $this->view->title = 'Staged ' ;
        $this->view->render(PROFILE_NAV.'/staged');
    }  
    public function settings($emails = '') {
        
        $this->view->pid = 'settings'; 
        //$this->view->data = $this->model->getemails($emails);
        $this->view->title = 'Settings ' ;
        $this->view->render(PROFILE_NAV.'/settings');
    }  
    
   
     
    public function profile() {  
        $this->view->pid = 'settings';
        
        $this->view->title = 'My profile settings';
        $this->view->render(PROFILE_NAV . '/settings/profile');
    }
    public function company() { 
        $this->view->pid = 'settings';
        
      
        $this->view->title = 'Company profile settngs';
        $this->view->render(PROFILE_NAV . '/settings/company');
    }
    
    public function logs() {   
        $this->view->pid = 'settings';
        
        $this->view->currentpage = $_GET['pg'] ?? 1;
        $this->view->logs = $this->model->getlogs(150); 
        $this->view->title = 'My profile settngs';
        $this->view->render(PROFILE_NAV . '/logs');
    }
    public function changepass() {   
        $this->view->pid = 'settings';
        $this->view->title = 'Change password';
        $this->view->render(PROFILE_NAV . '/settings/changepass');
    }
 
 
    public function users($action = 'all', $n = 0) {
        $this->view->pid = 'users';
        
        if ($this->view->_me['user_role'] != 'Admin') {
          die(CustomFunctions::relocate('/'.PROFILE_NAV.'?unauthorized=true'));
        }
        
        $this->view->currentpage = $_GET['pg'] ?? 1;
        $this->view->users = $this->model->users();  
        
        
        if ($action == 'new') {
            
            $this->view->title = ' New User ' ;
            $this->view->render(PROFILE_NAV . '/users/new');
            return;
        }
        
        if ($action == 'edit') { 
            
            $this->view->user = $this->model->users($_GET['id']);  
            $this->view->title = ' Edit User ' ;
            $this->view->render(PROFILE_NAV . '/users/edit');
            return;
        }
        if ($action == 'subscribers') {
            $this->view->subs = $this->model->getsubs();
            $this->view->title = ' Subscribers';
            $this->view->render(PROFILE_NAV . '/users/subscribers');
            return;
        }
        
        
        $this->view->title = ' Users';
        $this->view->render(PROFILE_NAV . '/users/index');
    }
    
    public function rides($action = 'all', $n = 0) {
        $this->view->pid = 'rides';
        $this->view->alarms = $action;
        
        if ($this->view->_me['user_role'] != 'Admin') {
          die(CustomFunctions::relocate('/'.PROFILE_NAV.'?unauthorized=true'));
        }
        
        $this->view->currentpage = $_GET['pg'] ?? 1;
        $this->view->rides = $this->model->getrides($action);  
        
       
        
        $this->view->title = ' Ride Requests';
        $this->view->render(PROFILE_NAV . '/rides/index');
    }
    
    public function drivers($action = 'all', $n = 0) {
        $this->view->pid = 'drivers';
        
        if ($this->view->_me['user_role'] != 'Admin') {
          die(CustomFunctions::relocate('/'.PROFILE_NAV.'?unauthorized=true'));
        }
        
        if (is_numeric($action)) {
            $this->view->driver = $this->model->drivers($action);
            $this->view->title = ' View Driver ' ;
            $this->view->render(PROFILE_NAV . '/drivers/view-driver');
            return;
        }
        
        $this->view->currentpage = $_GET['pg'] ?? 1;
        $this->view->users = $this->model->drivers();
         
        
        if ($action == 'new') {
            
            $this->view->title = ' New User ' ;
            $this->view->render(PROFILE_NAV . '/drivers/new');
            return;
        }
        
        if ($action == 'edit') { 
            
            $this->view->user = $this->model->drivers($_GET['id']);  
            $this->view->title = ' Edit User ' ;
            $this->view->render(PROFILE_NAV . '/drivers/edit');
            return;
        }
        if ($action == 'subscribers') {
            $this->view->subs = $this->model->getsubs();
            $this->view->title = ' Subscribers';
            $this->view->render(PROFILE_NAV . '/drivers/subscribers');
            return;
        }
        
        
        $this->view->title = ' Drivers';
        $this->view->render(PROFILE_NAV . '/drivers/index');
    }
 
    public function vehicles($action = 'all', $n = 0) {
        $this->view->pid = 'types';
        
        if ($this->view->_me['user_role'] != 'Admin') {
          die(CustomFunctions::relocate('/'.PROFILE_NAV.'?unauthorized=true'));
        }
        
        $this->view->currentpage = $_GET['pg'] ?? 1;
        $this->view->data = $this->model->vehicles();  
         
        
        
        $this->view->title = ' Vehicles Types';
        $this->view->render(PROFILE_NAV . '/vehicles/index');
    }
    public function blog($action = '', $id = null) { 
        $this->view->pid = 'blog';
	    
        if ($this->view->_company['c_user_can_blog'] != 'True') {
            die(CustomFunctions::relocate('/'.PROFILE_NAV.'?unauthorized=true'));
        }
        
        if ( ($this->view->_me['user_role'] != 'Admin') && ($this->view->_company()['c_user_can_blog'] != 'True') ) {
          die(CustomFunctions::relocate('/'.PROFILE_NAV.'?unauthorized=true'.($this->view->_company()['c_user_can_blog'] != 'True') ));
        }
         
        
        $this->view->currentpage = $_GET['pg'] ?? 1;
        $this->view->getCategories = $this->model->getCategories();
        
        if ($action == 'new') {
            $this->view->title = ' New Blog';
            $this->view->render(PROFILE_NAV.'/blog/new');
            return;
        } else if ($action == 'edit') { 
            $this->view->tags = $this->model->gettags( $id );
            $this->view->blog = $this->model->editpost( $id ); 
            $this->view->title = ' Edit Blogs';
            $this->view->render(PROFILE_NAV.'/blog/edit');
            return;
        }
        else if ($action  == 'categories') { 
            $this->view->title = ' Categories';
            $this->view->render(PROFILE_NAV.'/blog/categories');
            return;
        }
        
         
        $this->view->data = $this->model->totalblogs( ); 
        $this->view->title = ' Manage Blogs';
        $this->view->render(PROFILE_NAV.'/blog/index');
        return;
       
    }
 
    public function reports($action = '') {  
        $this->view->pid = 'reports';
        
        if ($this->view->_me['user_role'] != 'Admin') {
          die(CustomFunctions::relocate('/'.PROFILE_NAV.'?unauthorized=true'));
        }
           
      if ($action == 'contacts') {
          $this->view->msg = $this->model->getcontacts($_GET['status'] ?? 'current', $_GET['ticket_id'] ?? '' );
          $this->view->title = "Support Tickets ";
          if (!empty($_GET['ticket_id']))
	        $this->view->render(PROFILE_NAV.'/reports/view-ticket');
	      else $this->view->render(PROFILE_NAV.'/reports/contacts');
	      return;
      }
	  $this->view->title = "System Reports ";
	  $this->view->render(PROFILE_NAV.'/reports/system-reports');
    }
 
 
    public function logout() {
        Session::destroy();
        if (!isset($_GET['message'])) CustomFunctions::relocate('/');
        else CustomFunctions::relocate('/account?message=' . urlencode($_GET['message'] ?? '')  );
    }


















    ///////////////////
}
