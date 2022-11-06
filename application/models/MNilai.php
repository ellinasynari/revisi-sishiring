<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MNilai extends CI_Model {

    private $_table = 'nilai';
    public $id_nilai;
    public $id_jabatan_kosong;
    public $id_karyawan;
    public $nilai_kreatif;
    public $nilai_kerjasama;
    public $nilai_kemampuan_bekerja;
    public $nilai_kepemimpinan;
    public $nilai_norma;

 

    public function rules()
    {
        return [
            [
            ]
        ];
    }

    function tampil_semua()
    {
        return $this->db->get($this->_table)->result();

    }

    public function tampil_by_id($id)
    {
        return $this->db->get_where('nilai', ['id_nilai' => $id])->row();
    }

    public function save()
    {
		$post = $this->input->post();
        $this->id_jabatan_kosong = $post['id_jabatan_kosong'];
        $this->id_promosi = $post['id_promosi'];
        $this->nilai_kreatif = $post['nilai_kreatif'];
        $this->nilai_kerjasama = $post['nilai_kerjasama'];
        $this->nilai_kemampuan_bekerja = $post['nilai_kemampuan_bekerja'];
        $this->nilai_kepemimpinan = $post['nilai_kepemimpinan'];
        $this->nilai_norma = $post['nilai_norma'];

        $this->db->insert($this->_table, $this);
    }



}