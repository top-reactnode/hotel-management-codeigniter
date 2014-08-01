<?php

class TimeTableUpdateModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdata($empid){
            $query = $this->db->query("SELECT w.EMP_ID , w.WOR_DATEWORK, w.WOR_TIMEWORK, w.WOR_TIMEOUT, w.WOR_HOUR
                                        FROM  working w NATURAL JOIN employee e
                                        WHERE w.EMP_ID = '$empid'"); // session
            return $query->result_array();

        }

        public function updateemp(){

                $EMP_ID = $this->input->post('EMP_ID');
                $WOR_DATEWORK = $this->input->post('WORDATEWORK');
                $newDate = date("Y-m-d", strtotime($WOR_DATEWORK));
                $WOR_TIMEWORK = $this->input->post('WORTIMEWORK');
                $WOR_TIMEOUT = $this->input->post('WORTIMEOUT');
                $WOR_HOUR = $this->input->post('WORHOUR');
    
                $query = $this->db->query("UPDATE working SET EMP_ID = '$EMP_ID', WOR_DATEWORK = '$newDate', WOR_TIMEWORK = '$WOR_TIMEWORK',
                                                         WOR_TIMEOUT = '$WOR_TIMEOUT', WOR_HOUR = '$WOR_HOUR'
                                                       WHERE EMP_ID = '$EMP_ID'"); // session                    
            }

            public function get(){
                $query = $this->db->query("SELECT * FROM working "); // session
                return $query->result_array();
            }

        

}