<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class leavingAdd_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('leavingAddModel');
        $datas = $this->leavingAddModel->idemployee();
		$dataShowemp['idemployee'] = $datas;

        $this->load->view('leavingAdd', $dataShowemp);
	}

	public function getdataemp(){
		$this->load->model('leavingAddModel');
		$this->leavingAddModel->getdataemp();
		 redirect('leaving_controller');
	}
	
}
