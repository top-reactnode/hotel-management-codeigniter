<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimeTable_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('TimeTableModel');	
		$datas = $this->TimeTableModel->getdata();
		$dataShowemp['working'] = $datas;

        $this->load->view('menu');
    	$this->load->view('TimeTable',$dataShowemp);
	}
}
