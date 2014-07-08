<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormCustomer_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('FormCustomerModel');	
		$datas = $this->FormCustomerModel->cus();
		$dataShow['room'] = $datas;

    	$this->load->view('FormCustomer');
	}
	
	public function addroom(){
		
		$RES_ID = $this->input->post('id');
		$CUSTOMER_CUS_ID = $this->input->post('cusid');
		$RES_ROOMAMOUNT = $this->input->post('resroom');
		$PROMOTION_PRO_ID = $this->input->post('prores');
		$RES_DATERES = $this->input->post('resdate');
		$RES_DEPOSIT = $this->input->post('resdep');
		$RES_TOTALPRICE = $this->input->post('restotal');

		$this->load->model('FormCustomerModel');
		$this->FormCustomerModel->getdatares();
		$this->load->view('FormCustomer3');
	}

	function test(){
		echo "<script>alert(".isset($_POST['num']).");</script>";
	}

}
