<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class leaving_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('leavingModel');	
		$datas = $this->leavingModel->getdata();
		$dataShowemp['leaving'] = $datas;

        $this->load->view('menu');
		$this->load->view('leaving',$dataShowemp);
	}
	
}
