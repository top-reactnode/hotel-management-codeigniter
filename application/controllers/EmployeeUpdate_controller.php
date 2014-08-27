<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeUpdate_controller extends CI_Controller {

	public function index()
	{
		$empid = $this->input->get('empid');
		$this->load->model('EmployeeUpdateModel');	
		$dataget = $this->EmployeeUpdateModel->get();
		$datas = $this->EmployeeUpdateModel->getdata($empid);
		$dataShowemp['employee'] = $datas;
		$dataShowemp['position'] = $dataget;

    	$this->load->view('EmployeeUpdate',$dataShowemp);
	
	}

	public function updateemp()
	{
		$this->load->model('EmployeeUpdateModel');
		$this->EmployeeUpdateModel->updateemp();
		 redirect('EmployeeList_controller');
	}
	
}