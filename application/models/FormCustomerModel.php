<?php

class FormCustomerModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function cus(){
            $query = $this->db->query("SELECT ROOM_ID
                                        FROM room "); // session
             return $query->result_array();
        }
    
        public function getdatares(){

            $query = $this->db->query("INSERT INTO reserve (RES_ID, CUSTOMER_CUS_ID, RES_ROOMAMOUNT, PROMOTION_PRO_ID, RES_DATERES, RES_DEPOSIT, RES_TOTALPRICE)
                                       VALUES('$RES_ID', '$CUSTOMER_CUS_ID', '$RES_ROOMAMOUNT', '$PROMOTION_PRO_ID', '$RES_DATERES', '$RES_DEPOSIT', '$RES_TOTALPRICE')"); // session
                                      
        //     print_r($query);
        }
}