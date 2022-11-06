<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		
	public function index()
	{
		$this->load->view('adminHr/template/v_header');
		$this->load->view('adminHr/template/v_sidebar');
		$this->load->view('adminHr/v_dashboard');
		$this->load->view('adminHr/template/v_footer');
	}
}
