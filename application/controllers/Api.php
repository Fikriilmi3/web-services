<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('User_Model');
    }

    public function Login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			$userLoggedIn = $this->User_Model->login($_POST['username'],$_POST['password']);
            if ($userLoggedIn) {
                $data = [
                    'id' => $userLoggedIn['id'],
				    'username' => $userLoggedIn['username'],
				    'nama_anak' => $userLoggedIn['nama_anak'],
				    'jenis_kelamin' => $userLoggedIn['jenis_kelamin'],
				    'tempat_lahir' => $userLoggedIn['tempat_lahir'],
				    'tgl_lahir' => $userLoggedIn['tgl_lahir'],
				    'nama_ibu' => $userLoggedIn['nama_ibu'],
				    'telepone' => $userLoggedIn['telepone'],
				    'password' => $userLoggedIn['password'],
				    'status_login' => true
                ];
                $json = json_encode($data, JSON_PRETTY_PRINT);
                echo $json;
            } else {
                $data = [
                    'message' => 'Username atau password salah',
                    'status_login' => false
                ];
                $json = json_encode($data, JSON_PRETTY_PRINT);
                echo $json;
            }
        } else {
            $this->responsejson->send_response_json(['message' => 'Invalid request'], 400);
        }
    }

    public function Register()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama_anak' => $this->input->post('nama_anak'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'telepone' => $this->input->post('telepone'),
            'password' => md5($this->input->post('password')),
        );
        $this->User_Model->input_data($data,'user');
        unset($data['username'], $data['password'], $data['repassword']);
        echo json_encode($array);
    }

    public function UpdateAkun()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'nama_anak' => $this->input->post('nama_anak'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'telepone' => $this->input->post('telepone'),
            'password' => md5($this->input->post('password')),
        );
        $where = array('id' => $this->input->post('id'),);
        $this->User_Model->update_data($where,$data,'user');
        echo json_encode($data);
    }

    public function KPSP24(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal1($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function KPSP30(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal2($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function KPSP36(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal3($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function KPSP42(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal4($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function KPSP48(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal5($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function TDD1(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal6($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function TDD2(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal7($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function TDD3(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal8($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function TDL(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal9($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function KMME(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal10($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function CHATA(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal11($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function CHATB(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal12($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function GPPH(){
        $no_pertanyaan = filter_var($_GET['no_pertanyaan'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getSoal13($no_pertanyaan);
        echo json_encode($rawData);
    }

    public function HasilKPSP(){
        $kode_status = filter_var($_GET['kode_status'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getKpsp($kode_status);
        echo json_encode($rawData);
    }

    public function HasilTDD(){
        $kode_status = filter_var($_GET['kode_status'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getTdd($kode_status);
        echo json_encode($rawData);
    }

    public function HasilTDL(){
        $kode_status = filter_var($_GET['kode_status'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getTdl($kode_status);
        echo json_encode($rawData);
    }

    public function HasilKMME(){
        $kode_status = filter_var($_GET['kode_status'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getKmme($kode_status);
        echo json_encode($rawData);
    }

    public function HasilCHAT(){
        $kode_status = filter_var($_GET['kode_status'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getChat($kode_status);
        echo json_encode($rawData);
    }

    public function HasilGPPH(){
        $kode_status = filter_var($_GET['kode_status'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getGpph($kode_status);
        echo json_encode($rawData);
    }

    public function SimpanHasil()
    {
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'id_kategori' => $this->input->post('id_kategori'),
            'id_umur' => $this->input->post('id_umur'),
            'jumlah_ya' => $this->input->post('jumlah_ya'),
            'jumlah_tidak' => $this->input->post('jumlah_tidak'),
            'hasil' => $this->input->post('hasil'),
            'saran' => $this->input->post('saran'),
            'tgl_tes' => date('Y-m-d'),
        );
        $this->User_Model->input_data($data,'tb_hasil');
        echo json_encode($array);
    }

    public function Riwayat(){
        $id_user = filter_var($_GET['id_user'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getRiwayat($id_user);
        echo json_encode($rawData);
    }

    public function RiwayatAll(){
        $id_user = filter_var($_GET['id_user'], FILTER_SANITIZE_STRING);
        $rawData = $this->User_Model->getRiwayatAll($id_user);
        echo json_encode($rawData);
    }
}
