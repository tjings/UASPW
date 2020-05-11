<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Movie_model');
    $this->load->model('Room_model');
  }

  public function index()
  {
    redirect('dashboard');
  }

  public function showBooking()
  {
    $url = $this->input->get('id');
    $ruangan = $this->input->get('ruangan');
    $data['movie'] = $this->Movie_model->get_movie($url);
    $data['kursi'] = $this->Room_model->get_kursi($ruangan);
    $this->load->view('booking', $data);
  }

}