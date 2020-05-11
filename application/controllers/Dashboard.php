<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
      if($this->session->userdata('role') === 'admin') {
        $this->load->view('admin/dashboard');
      }
      else if($this->session->userdata('role') === 'user') {
        $this->load->view('user/dashboard');
      }
      else {
        $this->load->view('login');
      }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}