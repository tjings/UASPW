<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Movie_model');
  }

  public function index()
  {
    redirect('dashboard');
  }

  public function showBooking()
  {
    $url = $this->uri->segment(3);
    $data['movie'] = $this->Movie_model->get_movie($url);
    $this->load->view('booking', $data);
  }

}