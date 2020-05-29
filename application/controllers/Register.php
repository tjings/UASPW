<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('Register_model'); 
     }

     public function index()
     {
         $this->load->view('register');
     }
 
     public function registrasi() {
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('tanggal_lahir','TANGGAL LAHIR','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         
         if($this->form_validation->run() == FALSE) {
            redirect('register');
         }
         else {
             $data['username'] =    $this->input->post('username');
             $data['password'] =    md5($this->input->post('password'));
             $data['nama_user']   =    $this->input->post('name');
             $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
             $data['role'] = 'user';
 
             $this->Register_model->daftar($data);
             
             $pesan['message'] = "Register Success!";
             
             $this->load->view('success', $pesan);
         }
     }
 }