<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('MUpload');
        $this->load->model('MPromosi');
        $this->load->model('MInput');


    }

    /*
    |-------------------------------------------------------------------
    | Index
    |-------------------------------------------------------------------
    |
    */
	public function index()
	{
        $data['karyawan_list'] = $this->MUpload->fetch_karyawan();
		$this->load->view('adminHr/template/v_header');
		$this->load->view('adminHr/template/v_sidebar');
		$this->load->view('adminHr/v_promosi', $data);
		$this->load->view('adminHr/template/v_footer');
	}

    public function promosi_kandidat()
    {
	    $data = [
		'promosi' => $this->MPromosi->tampil_semua(),
		'jabatan_kosong' => $this->MInput->tampil_semua(),
		'karyawan' => $this->MUpload->tampil_semua(),
	];
		$this->load->view('adminHr/template/v_header');
		$this->load->view('adminHr/template/v_sidebar');
		$this->load->view('adminHr/v_promosi_kandidat', $data);
		$this->load->view('adminHr/template/v_footer');
	}
}

