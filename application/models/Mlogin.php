<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model{

    function cek_users($username,$password){
        
        $kondisi = array(
            'username' => $username,
            'password' => md5($password)

        );
        
        $this->db->select('*');
        $this->db->from('table_user');
        $this->db->where($kondisi);
        $this->db->limit('1');

        return $this->db->get();

    }

} 

