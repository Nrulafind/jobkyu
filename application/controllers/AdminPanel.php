<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminPanel extends CI_Controller
{

	// View Controll
	
	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	public function partners()
	{
		$this->load->view('admin/partners');
	}
}
