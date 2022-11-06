<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('MInput','MInput');
        $this->load->library('form_validation');
	}

	public function index()
    {
        $data = [
            'jabatan_kosong' => $this->MInput->tampil_semua(),
        ];

        $this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_input', $data);
		$this->load->view('superadmin/template/v_footer');
    }
	
	
	public function tambah()
    {

        $data['jabatan_kosong'] = $this->MInput->save();
        $data['jabatan_kosong'] = $this->MInput->tampil_semua();
        $this->load->view('superadmin/template/v_header');
		$this->load->view('superadmin/template/v_sidebar');
		$this->load->view('superadmin/v_input', $data);
		$this->load->view('superadmin/template/v_footer');      
    }
    
    public function save(){
        $id = $this->input->post('id');
        $jabatan_kosong = $this->input->post('jabatan_kosong');
        $departemen_kosong = $this->input->post('departemen_kosong');
        $kuota = $this->input->post('kuota');
        $foto = $this->input->post('foto');
        
        $data = array(
            'id' => $id,
            'jabatan_kosong' => $jabatan_kosong,
            'departemen_kosong' => $departemen_kosong,
            'kuota' => $kuota,
            'foto' => $foto,
            );
            
            $this->MInput->save($data, 'jabatan_kosong');
            redirect ('superadmin/input');

    }

    public function edit($id = null)
    {
        // var_dump($id);

        $var = $this->MInput;

        $data['jabatan_kosong'] = $var->tampil_by_id($id);
        $this->load->view('superadmin/template/v_header');
        $this->load->view('superadmin/template/v_sidebar');
        $this->load->view('superadmin/v_input_edit', $data);
        $this->load->view('superadmin/template/v_footer');

    }

    public function proses_edit($id = null){
        // var_dump($id);

        $var = $this->MInput;

        $this->MInput->update();
        $data['jabatan_kosong'] = $var->tampil_by_id($id);
        $this->load->view('superadmin/template/v_header');
        $this->load->view('superadmin/template/v_sidebar');
        $this->load->view('superadmin/v_input_edit', $data);
        $this->load->view('superadmin/template/v_footer');

        redirect('superadmin/Input');
    }

	public function hapus($id)
    {
        $this->MInput->hapus($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('superadmin/input');
    }



}



	