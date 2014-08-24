<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkinhistory_controller extends CI_Controller {

	public function index()
	{
        $this->load->view('menu');
    	$this->load->view('checkinhistory');
	}
}
