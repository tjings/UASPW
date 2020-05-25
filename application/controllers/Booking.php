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

  public function orderMovie()
  {
    $harga_movie = $this->input->post('harga') * $this->input->post('jmlTiket');

    $data = [
      'id_order' => '',
      'id_user' => $this->session->userdata('user_id'),
      'id_ruangan' => $this->input->post('id_ruangan'),
      'id_movie' => $this->input->post('id_movie'),
      'id_kursi' => $this->input->post('kursi'),
      'jumlah_tiket' => $this->input->post('jmlTiket'),
      'total_pembayaran' => $harga_movie
    ];

    $this->Movie_model->orderMovie($data, $data['id_kursi']);
    redirect('dashboard');
  }

  public function now(){
    $Movie_model['data'] = $this->Movie_model->ShowData();
		$this->load->view('user/now', $Movie_model);

  }

  public function teater(){
    $Room_model['data'] = $this->Room_model->ShowData();
		$this->load->view('user/teater', $Room_model);
  }

  public function soon(){
    $Movie_model['data'] = $this->Movie_model->ShowData();
		$this->load->view('user/coming', $Movie_model);

  }

}