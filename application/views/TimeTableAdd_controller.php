<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimeTableAdd_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('TimeTableAddModel');
		$datas = $this->TimeTableAddModel->idemployee();
		$dataShowemp['idemployee'] = $datas;

    	$this->load->view('TimeTableAdd',$dataShowemp);
	}

	public function getdataemp(){
		$this->load->model('TimeTableAddModel');
		$this->TimeTableAddModel->getdataemp();
		
		 redirect('TimeTable_controller');
	}
	
}
