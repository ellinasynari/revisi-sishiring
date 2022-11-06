<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUpload extends CI_Model 
{
    var $karyawan = 'karyawan';

    private $_table = 'karyawan';
    public $id;
    public $id_karyawan;
    public $nama;
    public $posisi;
    public $departemen;
    public $sakit;
    public $izin;
    public $hadir;
    public $alpha;

    
    public function rules()
    {
        return [
            [
            ]
        ];
    }

    /*
    |-------------------------------------------------------------------
    | Fetch All Karyawan Data
    |-------------------------------------------------------------------
    | 
    */
    function fetch_karyawan()
    {

        /* Query */
        $this->db->select("*");
        
        $query = $this->db->get($this->karyawan);
        return $query->result_array();
    }


    function tampil_semua()
    {

      $query = $this->db->get('karyawan');
      return $query->result();
    }
    /*
    |-------------------------------------------------------------------
    | Insert Batch Karyawan Data
    |-------------------------------------------------------------------
    |
    | @param $data  Karyawan Array Data
    |
    */
    function insert_karyawan_batch($data)
    {
      $this->db->insert_batch($this->karyawan, $data);
    }


}