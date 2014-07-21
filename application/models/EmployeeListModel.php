<?php

class EmployeeListModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdata(){
            $query = $this->db->query("SELECT e.EMP_ID, e.EMP_FNAME ,e.EMP_LNAME , p.POS_NAME, e.EMP_PHONE, e.EMP_SALARY
                                        FROM employee e NATURAL JOIN position p "); // session
            return $query->result_array();
        }

}