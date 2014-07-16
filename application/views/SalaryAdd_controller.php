<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalaryAdd_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('SalaryAddModel');
		$datas = $this->SalaryAddModel->getdata();
		$dataShowemp['working'] = $datas;

    	$this->load->view('SalaryAdd',$dataShowemp);
	}

	public function AddSalary(){
		$employee = $_POST['employee'];
		$this->load->model('SalaryAddModel');
		$this->SalaryAddModel->addSalary($employee);
		redirect('Salary_controller');
	}

}
