<?php

class leavingUpdateModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdata($empid){
            $query = $this->db->query("SELECT l.LEA_ID, l.EMP_ID, l.TYL_NAME, l.LEA_DATESTART, l.LEA_DATEEND, l.LEA_ETC
                                        FROM leaving l NATURAL JOIN employee e
                                        WHERE e.EMP_ID = '$empid'"); // session
            return $query->result_array();

        }

        public function updateemp(){

                $EMP_ID = $this->input->post('empid');
                $TYL_NAME = $this->input->post('TYL_NAME');
                $DAY = $this->input->post('DAY');
                $LEA_DAY = explode(" ",$DAY);
                $newstart = date("Y-m-d", strtotime($LEA_DAY[0]));
                $newend = date("Y-m-d", strtotime($LEA_DAY[2]));
                $LEA_ETC = $this->input->post('LEA_ETC');
    
                $query = $this->db->query("UPDATE leaving SET EMP_ID = '$EMP_ID', TYL_NAME = '$TYL_NAME', LEA_DATESTART = '$newstart',
                                                               LEA_DATEEND = '$newend', LEA_ETC = '$LEA_ETC' 
                                                       WHERE EMP_ID = '$EMP_ID'"); // session               
                // print_r($query);
            }

            public function get(){
                $query = $this->db->query("SELECT * FROM leaving "); // session
                return $query->result_array();
            }


}