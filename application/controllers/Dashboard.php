<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('Movie_model');
    }

    public function index()
    {
      $data['movies'] = $this->Movie_model->get_movies();

      if($this->session->userdata('role') === 'admin') {
				redirect('moviePage');
      }
      else if($this->session->userdata('role') === 'user') {
        $this->load->view('user/dashboard', $data);
      }
      else {
        redirect('login');
      }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}
