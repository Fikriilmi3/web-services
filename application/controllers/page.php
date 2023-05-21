<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing akses to superadmin only
      if($this->session->userdata('level')==='1'){
          $this->load->view('dashboard');
      }else{
          echo "Access Denied";
      }
 
  }
 
  function staff(){
    //Allowing akses to admin only
    if($this->session->userdata('level')==='2'){
      $this->load->view('dashboard');
    }else{
        echo "Access Denied";
    }
  }
}