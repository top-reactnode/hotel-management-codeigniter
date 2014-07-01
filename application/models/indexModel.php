<?php

class indexModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function get(){
            $query = $this->db->query("SELECT ROOM_ID, ROOM_NAME ,TYPEROOM_TYR_ID
                                        FROM room "); // session
            return $query->result_array();
        }

}