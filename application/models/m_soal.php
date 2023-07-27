<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_soal extends CI_Model{

    public function get_data_soal()
    {
        $this->db->select('*');
        $this->db->from('tb_soal');
        $this->db->join('tb_kategori_soal', 'tb_soal.id_kategori = tb_kategori_soal.id');
        $this->db->join('tb_umur', 'tb_soal.id_umur = tb_umur.id');
        return $this->db->get();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('tb_soal');
        $this->db->join('tb_kategori_soal', 'tb_soal.id_kategori = tb_kategori_soal.id');
        $this->db->join('tb_umur', 'tb_soal.id_umur = tb_umur.id');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_soal', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_soal');
    }
}
