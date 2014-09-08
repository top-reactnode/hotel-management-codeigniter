<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimeTableUpdate_controller extends CI_Controller {

	public function index()
	{
		$empid = $this->input->get('empid');
		$this->load->model('TimeTableUpdateModel');	
		$dataget = $this->TimeTableUpdateModel->get();
		$datas = $this->TimeTableUpdateModel->getdata($empid);
		$dataShowemp['working'] = $datas;
		$dataShowemp['employee'] = $dataget;

    	$this->load->view('TimeTableUpdate',$dataShowemp);
	
	}

	public function updateemp()
	{
		$this->load->model('TimeTableUpdateModel');
		$this->TimeTableUpdateModel->updateemp();
		 redirect('TimeTable_controller');
	}
	
}