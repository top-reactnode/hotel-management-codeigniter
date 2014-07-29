<?php
class SalaryAddModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }
       
        public function getdata(){
            $query = $this->db->query("SELECT w.WOR_ID, w.EMP_ID, e.EMP_FNAME, e.EMP_LNAME, w.WOR_DATEWORK, w.WOR_TIMEWORK , w.WOR_TIMEOUT,
                                              TIMESTAMPDIFF(HOUR,  w.WOR_TIMEWORK , w.WOR_TIMEOUT) AS test 
                                        FROM working w NATURAL JOIN employee e
                                        WHERE NOT EXISTS (SELECT EMP_ID FROM salary WHERE EMP_ID = w.EMP_ID AND SAL_DATE = w.WOR_DATEWORK) "); // session
            return $query->result_array();
        }

        public function addSalary($employee){
            for($i=0;$i < sizeof($employee);$i++){
                $data = array(
                    'EMP_ID'=> $employee[$i]['emp_id'],
                    'SAL_DATE'=> $employee[$i]['date'],
                    'SAL_ROUNDOFSALARY'=> date("Y-m-d"),
                    'SAL_MONEY'=> $employee[$i]['wage']
                );  
                $this->db->insert('salary',$data);            
            }                
        }

}