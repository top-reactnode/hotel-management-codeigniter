<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('SalaryModel');	
		$datas = $this->SalaryModel->getdata();
		$dataShowemp['salary'] = $datas;

        $this->load->view('menu');
    	$this->load->view('Salary',$dataShowemp);
	}
}
