<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_hasil extends CI_Model{

    public function get_data_hasil()
    {
        $this->db->select('*');
        $this->db->from('tb_hasil');
        $this->db->join('user', 'tb_hasil.id_user = user.id');
        $this->db->join('tb_kategori_soal', 'tb_hasil.id_kategori = tb_kategori_soal.id');
        $this->db->join('tb_umur', 'tb_hasil.id_umur = tb_umur.id');
        return $this->db->get();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_hasil');
    }
}
