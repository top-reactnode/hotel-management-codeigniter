<?php

class SalaryModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdata(){
            $query = $this->db->query("SELECT  s.EMP_ID, e.EMP_FNAME, e.EMP_LNAME, s.SAL_DATE, s.SAL_ROUNDOFSALARY , s.SAL_MONEY                                
                                        FROM salary s NATURAL JOIN employee e"); // session
            return $query->result_array();
        }

    

}