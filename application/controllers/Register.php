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
         $this->form_validation->set_rules('name', 'name','required');
         $this->form_validation->set_rules('tanggal_lahir','birthdate','required');
         $this->form_validation->set_rules('username', 'username','required');
         $this->form_validation->set_rules('password','password','required');
         $this->form_validation->set_rules('password_conf','confirm password','required|matches[password]');
         
         if($this->form_validation->run() == FALSE) {
            $gagal['fail'] = "Register Unsuccess!";
            $this->load->view('failedregister', $gagal);
         }
         else {
             $data['username'] =    $this->input->post('username');
             $data['password'] =    md5($this->input->post('password'));
             $data['nama_user']   =    $this->input->post('name');
             $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
             $data['role'] = 'user';
 
             $this->Register_model->daftar($data);
             
             $berhasil['message'] = "Register Success!";
             
             $this->load->view('successregister', $berhasil);
         }
     }
 }