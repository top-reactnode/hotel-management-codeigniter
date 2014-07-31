<?php
class TimeTableAddModel extends CI_Model {
            
         public function __construct()
        {
            parent::__construct();
        }

        public function getdataemp(){

            $WOR_DATEWORK = $this->input->post('WOR_DATEWORK');
            $EMP_ID = $this->input->post('EMP_ID');
            $WOR_TIMEWORK = $this->input->post('WOR_TIMEWORK');
            $WOR_TIMEOUT = $this->input->post('WOR_TIMEOUT');
             //print_r($WOR_DATEWORK);
            $newDate = date("Y-m-d", strtotime($WOR_DATEWORK));
           // print_r($newDate);
            $query = $this->db->query("INSERT INTO working ( WOR_DATEWORK, EMP_ID, WOR_TIMEWORK, WOR_TIMEOUT)
                                       VALUES( '$newDate', '$EMP_ID', '$WOR_TIMEWORK', '$WOR_TIMEOUT')"); // session     
        }
       
        public function idemployee(){
            $query = $this->db->query("SELECT * FROM  employee"); // session
            return $query->result_array();
        }

}