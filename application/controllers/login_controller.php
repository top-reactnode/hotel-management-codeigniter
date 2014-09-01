<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	public function index()
	{
		
		$this->load->view('login');
	}

	public function check_login(){

		$this->load->model('LoginModel');
		$data = $this->LoginModel->get_data();

		if(count($data) > 0){
			redirect('index_controller');
		
		}
		else {
		redirect('login_controller');
		}
	}
}