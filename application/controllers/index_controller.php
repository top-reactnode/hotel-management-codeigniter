<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('indexModel');	
		$datas = $this->indexModel->get();
		$dataShow['room'] = $datas;

		$this->load->view('menu');
		$this->load->view('indexhome',$dataShow);

	}



}
