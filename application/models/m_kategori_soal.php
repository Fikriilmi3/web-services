<?php

class M_kategori_soal extends CI_Model{

    public function generate_id_kategori_soal()
    {
        $this->db->select('RIGHT(tb_kategori_soal.id,3) as kode', false);
        $this->db->order_by('id','desc');
        $this->db->limit(1);
        $query = $this->db->get('tb_kategori_soal');
        if ($query->num_rows() > 0){
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else{
            $kode = 1;
        }

        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "KS".$kodemax;
        return $kodejadi;
    }

    public function get_data_kategori_soal()
    {
        $this->db->select ('*');
        $this->db->from ('tb_kategori_soal');
        $this->db->join ('tb_modul', 'tb_kategori_soal.id_modul = tb_modul.id');
        // $this->db->join ('penerbit', 'buku.id_penerbit = penerbit.id_penerbit');
        return $this->db->get();
        // return $this->db->get('tb_kategori_soal')->result();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('tb_kategori_soal');
        $this->db->join('tb_modul', 'tb_kategori_soal.id_modul = tb_modul.id');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_kategori_soal', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kategori_soal');
    }

    public function getModulNames()
    {
        $this->db->select('nama_modul');
        $this->db->from('tb_modul');
        return $this->db->get()->result_array();
    }
}

