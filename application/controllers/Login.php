<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin','Mlogin');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function cek_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->Mlogin->cek_users($username,$password);

		if($cek->num_rows() == 1)
		{

		}else{
				echo "User Tidak Terdaftar";
			}
		foreach($cek->result() as $data){
			$users = array(
				'level' => $data->level == 1
			);
			if($data->level == 1)
			{
				$this->load->view('superadmin/template/v_header');
				$this->load->view('superadmin/template/v_sidebar');
				$this->load->view('superadmin/v_dashboard');
				$this->load->view('superadmin/template/v_footer');

			}elseif($data->level == 2)
			{
					$this->load->view('adminHr/template/v_header');
					$this->load->view('adminHr/template/v_sidebar');
					$this->load->view('adminHr/v_dashboard');
					$this->load->view('adminHr/template/v_footer');
			}else{
				echo "User Tidak Terdaftar";
			}


		}
	}

  public function logout(){
    $this->session->sess_destroy(); // Hapus semua session
    redirect('login'); // Redirect ke halaman login
  }
}