<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    function edit_data($where, $table){
		return $this -> db -> get_where($table,$where);
	}

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function login($username, $password)
	{
        $sql = "SELECT * FROM user WHERE username = ?";
        $query = $this->db->query($sql, array($username));
        $row = $query->row_array();
        if (isset($row)) 
        {
            $new_password=md5($password);
            $hashedPassword = $row['password'];
            if($new_password==$hashedPassword)
            {
                return $row;
            } else {
                return false;
            }
        }
	}

    function getSoal1($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_umur = 1 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal2($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_umur = 2 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal3($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_umur = 3 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal4($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_umur = 4 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal5($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_umur = 5 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal6($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 2 AND id_umur = 6 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal7($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 2 AND id_umur = 7 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal8($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 2 AND id_umur = 8 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal9($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 3 AND id_umur = 10 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal10($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 4 AND id_umur = 11 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal11($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 5 AND id_umur = 12 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal12($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 5 AND id_umur = 13 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getSoal13($id){
        $query = $this->db->query("SELECT pertanyaan AS soal, gambar AS gambar, COUNT(*) AS jumlah FROM tb_soal  WHERE id_kategori = 6 AND id_umur = 11 AND no_pertanyaan = $id");
        return $query->result_array();
    }

    function getKpsp($id){
        $query = $this->db->query("SELECT saran AS saran, status AS status FROM tb_status  WHERE id_kategori = 1 AND kode_status = '$id'");
        return $query->result_array();
    }

    function getTdd($id){
        $query = $this->db->query("SELECT saran AS saran, status AS status FROM tb_status  WHERE id_kategori = 2 AND kode_status = '$id'");
        return $query->result_array();
    }

    function getTdl($id){
        $query = $this->db->query("SELECT saran AS saran, status AS status FROM tb_status  WHERE id_kategori = 3 AND kode_status = '$id'");
        return $query->result_array();
    }

    function getKmme($id){
        $query = $this->db->query("SELECT saran AS saran, status AS status FROM tb_status  WHERE id_kategori = 4 AND kode_status = '$id'");
        return $query->result_array();
    }

    function getChat($id){
        $query = $this->db->query("SELECT saran AS saran, status AS status FROM tb_status  WHERE id_kategori = 5 AND kode_status = '$id'");
        return $query->result_array();
    }

    function getGpph($id){
        $query = $this->db->query("SELECT saran AS saran, status AS status FROM tb_status  WHERE id_kategori = 6 AND kode_status = '$id'");
        return $query->result_array();
    }

    function getRiwayat($id){
        $date = date('m');
        $query = $this->db->query("SELECT * FROM tb_hasil INNER JOIN tb_kategori_soal ON tb_hasil.id_kategori = tb_kategori_soal.id INNER JOIN tb_umur ON tb_hasil.id_umur = tb_umur.id WHERE MONTH(tgl_tes) = $date AND id_user = $id");
        return $query->result_array();
    }

    function getRiwayatAll($id){
        $query = $this->db->query("SELECT * FROM tb_hasil INNER JOIN tb_kategori_soal ON tb_hasil.id_kategori = tb_kategori_soal.id INNER JOIN tb_umur ON tb_hasil.id_umur = tb_umur.id WHERE id_user = $id");
        return $query->result_array();
    }

    public function get_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user');
    }

    public function get_id($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user');
    }

    public function add_pengguna($params)
    {
        return $this->db->insert('user', $params);
    }

    public function ubah_pengguna($id, $params)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $params);
    }
}
