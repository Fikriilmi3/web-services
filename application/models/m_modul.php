<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class M_modul extends CI_Model{

    public function generate_id_modul()
    {
        $this->db->select('RIGHT(tb_modul.id,3) as kode', false);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get('tb_modul');
        if ($query->num_rows() > 0){
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else{
            $kode = 1;
        }

        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "U".$kodemax;
        return $kodejadi;
    }

    public function getAllDataModul()
    {
        return $this->db->get('tb_modul')->result();
    }

    // public function edit($id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_modul');
    //     $this->db->where('id', $id);
    //     return $this->db->get()->row_array();
    // }

    // public function update($id, $data)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->update('tb_modul', $data);
    // }

    // public function delete($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->delete('tb_modul');
    // }
}

