<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promosi extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('MPromosi','MPromosi');
		$this->load->model('MInput','MInput');
		$this->load->model('MUpload','MUpload');


        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
            'promosi' => $this->MPromosi->tampil_semua(),
			'jabatan_kosong' => $this->MInput->tampil_semua(),
            'karyawan' => $this->MUpload->tampil_semua(),

        ];

		$this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_promosi', $data);
		$this->load->view('superadmin/template/v_footer');
	}


	public function tambah()
    {

		$data['jabatan_kosong'] = $this->MInput->tampil_semua();
		$data['karyawan'] = $this->MUpload->tampil_semua();
        $data['promosi'] = $this->MPromosi->tampil_semua();
        $this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/modal-input-promosi', $data);
		$this->load->view('superadmin/template/v_footer');      
    }

	public function save(){

        $id = $this->input->post('id');
        $id_jabatan_kosong = $this->input->post('id_jabatan_kosong');
        $id_karyawan = $this->input->post('id_karyawan');
		$jadwal = $this->input->post('jadwal');
		$nilai_kreatif = $this->input->post('nilai_kreatif');
		$nilai_kerjasama = $this->input->post('nilai_kerjasama');
		$nilai_kemampuan_bekerja = $this->input->post('nilai_kemampuan_bekerja');
		$nilai_kepemimpinan = $this->input->post('nilai_kepemimpinan');
		$nilai_norma = $this->input->post('nilai_norma');
		$grade = $this->input->post('grade');
		

        $data = array(
            'id' => $id,
            'id_jabatan_kosong' => $id_jabatan_kosong,
            'id_karyawan' => $id_karyawan,
			'jadwal' => $jadwal,
			'nilai_kreatif' => $nilai_kreatif,
			'nilai_kerjasama' => $nilai_kerjasama,
			'nilai_kemampuan_bekerja' => $nilai_kemampuan_bekerja,
			'nilai_kepemimpinan' => $nilai_kepemimpinan,
			'nilai_norma' => $nilai_norma,
			'grade' => $grade,


        );

        $this->MPromosi->save($data,'promosi');
        redirect('superadmin/promosi');
    }

     public function delete ($id) {
        $this->MPromosi->delete($id);
        redirect('superadmin/promosi');
     }
}
