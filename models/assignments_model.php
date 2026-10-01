<?php 

class assignments_model extends Model {

    #[Override]
    public function __construct()
    {
        parent::__construct();
    }

    public function x() {
        
    }
    

    public function assignments($id = 0) {

        $assignments = (!empty($id)) ? $this->_get('assignments', 'assignment_url', [$id])[1] : $this->_get('assignments')[1];
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
 






























}