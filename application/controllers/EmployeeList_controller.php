<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeList_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('EmployeeListModel');	
		$datas = $this->EmployeeListModel->getdata();
		$dataShowemp['employee'] = $datas;

        $this->load->view('menu');
    	$this->load->view('EmployeeList',$dataShowemp);
	}
}