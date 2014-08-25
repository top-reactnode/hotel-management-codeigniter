<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeAdd_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('EmployeeAddModel');
		$datas = $this->EmployeeAddModel->dataemp();
		$dataShowemp['position'] = $datas;

    	$this->load->view('EmployeeAdd',$dataShowemp);
	}

	public function getdataemp(){
		$this->load->model('EmployeeAddModel');
		$this->EmployeeAddModel->getdataemp();
		 redirect('EmployeeList_controller');
	}
	
}
