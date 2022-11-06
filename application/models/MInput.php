<?php

class MInput extends CI_Model
{

	private $_table = 'jabatan_kosong';
    public $id;
    public $posisi_kosong;
    public $departemen_kosong;
    public $kuota;
    public $foto = "logo.png";

    public function rules()
    {
        return [
            [
                
            ]
        ];
    }

    public function tampil_semua()
    {
        $query = $this->db->get('jabatan_kosong');
        return $query->result();
    }

    public function tampil_by_id($id)
    {
        return $this->db->get_where('jabatan_kosong', ['id' => $id])->row();
    }

    public function save()
    {
		$post = $this->input->post();
        $this->posisi_kosong = $post['posisi_kosong'];
        $this->departemen_kosong = $post['departemen_kosong'];
        $this->kuota = $post['kuota'];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id = $post['id'];
        $this->posisi_kosong = $post['posisi_kosong'];
        $this->departemen_kosong = $post['departemen_kosong'];
        $this->kuota = $post['kuota'];

        if (!empty($_FILES['foto']['name'])) {
        $this->foto = $this->_uploadImage();

        } else {
           $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        //$this->_deleteImage($id);
        $this->db->delete('jabatan_kosong', ['id' => $id]);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->posisi_kosong;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }

        return ('logo.png');
    }

    //private function _deleteImage($id_siswa)
    //{
    //    $img = $this->tampil_by_id($id);
    //    if ($img->foto != 'logo.png') {
    //        $filename = explode(".", $img->foto)[0];
     //       return array_map('unlink', glob(FCPATH . "upload/$filename.*"));
    //    }
   // }

    
}
