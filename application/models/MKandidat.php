<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKandidat extends CI_Model {

    private $_table = 'karyawan';
	public 	$id_karyawan, $id, $nama, $departemen, $posisi, $sakit, $izin, $hadir, $alpha;

    var $karyawan = 'karyawan';

    function tampil_semua()
    {
		$query = $this->db->get('karyawan');
        return $query->result();
    }

    public function update($data)
   {
      $this->db->insert('nilai', $data);
   }
    
}