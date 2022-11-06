<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPromosi extends CI_Model {

    private $_table = 'promosi';
    public $id;
    public $id_jabatan_kosong;
    public $id_karyawan;
    public $jadwal;
    public $nilai_kreatif;
    public $nilai_kerjasama;
    public $nilai_kemampuan_bekerja;
    public $nilai_kepemimpinan;
    public $nilai_norma;
    public $grade;


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
        return $this->db->get_where('promosi', ['id' => $id])->row();
    }
    

    public function save()
    {
		$post = $this->input->post();

        $this->id_jabatan_kosong = $post['id_jabatan_kosong'];
        $this->id_karyawan = $post['id_karyawan'];
        $this->jadwal = $post['jadwal'];

        $this->nilai_kreatif = $post['nilai_kreatif'];
        $this->nilai_kerjasama = $post['nilai_kerjasama'];
        $this->nilai_kemampuan_bekerja = $post['nilai_kemampuan_bekerja'];
        $this->nilai_kepemimpinan = $post['nilai_kepemimpinan'];
        $this->nilai_norma = $post['nilai_norma'];
        $this->grade = $post['grade'];


        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id = $post['id'];

        $this->id_jabatan_kosong = $post['id_jabatan_kosong'];
        $this->id_karyawan = $post['id_karyawan'];
        $this->jadwal = $post['jadwal'];
        $this->status = $post['status'];

        $this->nilai_kreatif = $post['nilai_kreatif'];
        $this->nilai_kerjasama = $post['nilai_kerjasama'];
        $this->nilai_kemampuan_bekerja = $post['nilai_kemampuan_bekerja'];
        $this->nilai_kepemimpinan = $post['nilai_kepemimpinan'];
        $this->nilai_norma = $post['nilai_norma'];
        $this->grade = $post['grade'];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete ($id) {
        $this->db->where('id',$id);
        $this->db->delete('promosi');
     }
  

}