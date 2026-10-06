<?php 
class Dashboard_Model extends Model {
    public function __construct() 
    {
        parent::__construct(); 
    }
  
  
    public function getemails($email='') {  
      //$emails = $this->_get('users', 'user_email', [$email], 0)[1];
      $email_data = $this->_get('emails_data', 'user_email_fk', [], 1, 'order by id desc limit 100')[1];

      $emails = [];
      foreach($email_data as $row) {
        $emails[] = 
            [
                'id'      => $row['email_id'],
                'from'    => $row['email_from'],
                'subject' => $row['subject'],
                'date'    => $row['date'],
                'snippet' => $row['snippet'],
                'body'    => $row['body']
            ];
      }
 

      if (!empty($_GET['refresh']) || empty($emails['user_emails_data'])) {
        return json_decode($this->curl('acc-connect/emails', ['email'=>$email, 'rand'=>rand() ]), 1);
      }

      
     return ($emails);
     
    }
    
   

    
    public function getlogs($max) {  
        return $this->_get('logs left join users on l_by = user_ID ', '', [  ], true, " order by l_ID desc limit $max" )[1];
    }
     
     
 
    public function gettags($id) {
        $tags = $this->_get('tags left join post_tags on tags.tag_id = post_tags.tag_id  ', 'post_id', [ $id ], true )[1];
        return $tags;
    }
  
    
    public function getCategories($ajax = null) {
        
	    return $this->_get('blog_categories')[1];
		
    }
    
    public function getsummaries() { 
    
        return [
            'users' => $this->_getmore('users', 'count(user_ID)', 'user_ID >', [0]),
            'contact'=>$this->_getmore('contactus', 'count(id)', 'id > ', [0]),
            'visits'=>$this->_getmore('analytics', 'count(id)', 'id > ', [0]),
            
            ];
    }

    public function doIOwnIt($email) {
        $user = $this->_get('users', 'user_email', [$email], 0)[1];
        if (!empty($user)) {
            return ($user['referred_by'] == $this->_me['user_code']);
        }
        return false;
    }

    public function accounts($status = '') {
        
        if (!empty($status)) { 
            return [
                'data'=>$this->_get('users', 'status', [$status], true, " order by user_ID desc {$this->pagination()} ")[1],
                'count'=>$this->_get('users', 'status', [$status])[0],
                'connected'=>$this->_get('users', 'status', [$status])[1],
            ];
        }
        $totalusers = $this->_get('users', '', [], true, " order by user_ID desc {$this->pagination()} ")[1];
        $output = [];
        foreach($totalusers as $row) {
            $row['owner'] = $this->_get('users', 'user_code', [$row['referred_by']], 0)[1]['user_email'] ?? '';
            $output[] = $row;
        }
        return [ 
            'data'=>$output,
            'count'=>$this->_get('users', '', [])[0],
            'connected'=>$this->_get('users', '', [])[1],
        ];
        return $this->_get('users', '', [], true, " order by user_ID desc {$this->pagination()} ")[1];
    }
    public function stagedAccounts($status = '') {
        
        if (!empty($status)) {
            return [
                'data'=>$this->_get('users', 'status, user_role !=, roles_type != ', [$status, 'Admin', 'user'], true, " order by user_ID desc {$this->pagination()} ")[1],
                'count'=>$this->_get('users', 'status, user_role !=, roles_type != ', [$status, 'Admin', 'user'])[0],
                'connected'=>$this->_get('users', 'status, user_role !=, roles_type != ', [$status, 'Admin', 'user'])[1],
            ];
        }
        $totalusers = $this->_get('users', 'user_role !=, roles_type != ', ['Admin', 'user'], true, " order by user_ID desc {$this->pagination()} ")[1];
        
        return [ 
            'data'=>$totalusers,
            'count'=>$this->_get('users', ' user_role !=, roles_type != ', [ 'Admin', 'user'])[0],
            'connected'=>$this->_get('users', ' user_role !=, roles_type != ', [ 'Admin', 'user'])[1],
        ];
       
    }

    public function totalUsers($roles = 'user') {
        $totalusers = $this->_get('users', 'roles_type', [$roles], true, " order by user_ID desc ")[1];
        $output = [];
        foreach($totalusers as $row) {
            $row['owner'] = $this->_get('users', 'user_code', [$row['referred_by']], 0)[1]['user_email'] ?? '';
            $output[] = $row;
        }

        return $output ;// $this->_get('users', 'roles_type', [$roles])[1];
    }
    public function fetchRoles() {
        return $this->_get('roles')[1];
    }
    public function getCourses() {
        $courses = $this->_get('courses')[1];
        $output = [];

        foreach($courses as $row) {
            $row['assignments'] = $this->_getmore('assignments', 'count(id)', 'course_id', [$row['id']]);
            $output[] = $row;
        }

        return $output;
    }

    public function assignments($id = 0) {

        $assignments = (!empty($id)) ? $this->_get('assignments', 'id', [$id])[1] : $this->_get('assignments')[1];
        $output = [];
        foreach($assignments as $row) {
            $course = $this->_get('courses', 'id', [$row['course_id']], 0)[1];
            $row['code'] = $course['code'];
            $row['name'] = $course['name'];
            $row['academic_year'] = $course['academic_year'];
            $row['instructor'] = $course['instructor'];

            $output[] = $row; 
        }
 

        return $output;
    }

    public function getTemplates() {
        return $this->_get('email_templates')[1];
    }
 
     





    ///////////////////
}

