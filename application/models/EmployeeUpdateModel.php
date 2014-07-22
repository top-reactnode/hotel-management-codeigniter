<?php

class EmployeeUpdateModel extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        public function getdata($empid){
            $query = $this->db->query("SELECT e.EMP_ID ,e.POS_ID, e.EMP_FNAME, e.EMP_LNAME, e.EMP_PHONE, e.EMP_EMAIL, 
                                                e.EMP_EDUCATION, e.EMP_GENDER, e.EMP_SALARY, e.EMP_BIRTHDATE, e.EMP_DATESTARTWORK, e.EMP_ADDRESS
                                        FROM employee e NATURAL JOIN position p 
                                        WHERE e.EMP_ID = '$empid'"); // session
            return $query->result_array();

        }

        public function updateemp(){

                $EMP_ID = $this->input->post('empid');
                $POS_ID = $this->input->post('positionemp');
                $EMP_FNAME = $this->input->post('Fnameemp');
                $EMP_LNAME = $this->input->post('Lnameemp');
                $EMP_PHONE = $this->input->post('Telemp');
                $EMP_EMAIL = $this->input->post('Emailemp');
                $EMP_EDUCATION = $this->input->post('Educationemp');
                $EMP_GENDER = $this->input->post('genderemp');
                $EMP_SALARY = $this->input->post('salaryemp');
                $EMP_BIRTHDATE = $this->input->post('birthdayemp');
                $์NEW_BIRTHDATE = date("Y-m-d", strtotime($EMP_BIRTHDATE));
                $EMP_DATESTARTWORK = $this->input->post('dateemp');
                $์NEW_DATESTARTWORK = date("Y-m-d", strtotime($EMP_DATESTARTWORK));
                $EMP_ADDRESS = $this->input->post('addressemp');
    
                $query = $this->db->query("UPDATE employee SET EMP_ID = '$EMP_ID', POS_ID = '$POS_ID', EMP_FNAME = '$EMP_FNAME', EMP_LNAME = '$EMP_LNAME', EMP_PHONE = '$EMP_PHONE', EMP_EMAIL = '$EMP_EMAIL', 
                                                       EMP_EDUCATION = '$EMP_EDUCATION', EMP_GENDER = '$EMP_GENDER', EMP_SALARY = '$EMP_SALARY', EMP_BIRTHDATE = '$์NEW_BIRTHDATE',
                                                        EMP_DATESTARTWORK = '$์NEW_DATESTARTWORK', EMP_ADDRESS = '$EMP_ADDRESS'
                                                       WHERE EMP_ID = '$EMP_ID'"); // session               
                // print_r($query);
            }

            public function get(){
                $query = $this->db->query("SELECT * FROM position "); // session
                return $query->result_array();
            }

        

}