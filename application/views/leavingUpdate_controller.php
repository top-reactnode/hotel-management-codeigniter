<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class leavingUpdate_controller extends CI_Controller {

	public function index()
	{
		$empid = $this->input->get('empid');
		$this->load->model('leavingUpdateModel');	
		$datas = $this->leavingUpdateModel->getdata($empid);
		$dataShowemp['leaving'] = $datas;

    	$this->load->view('leavingUpdate',$dataShowemp);
	
	}

	public function updateemp()
	{
		$this->load->model('leavingUpdateModel');
		$this->leavingUpdateModel->updateemp();
		 redirect('leaving_controller');
	}
	
}