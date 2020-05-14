<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('register'); 
     }
 
     public function registrasi() {
 
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('register');
         }else{
 
             $data['nama']   =    $this->input->post('name');
             $data['username'] =    $this->input->post('username');
             $data['password'] =    md5($this->input->post('password'));
 
             $this->register->daftar($data);
             
             $pesan['message'] =    "Pendaftaran berhasil";
             
             $this->load->view('success',$pesan);
         }
     }
 }