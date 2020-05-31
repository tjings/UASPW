<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Movie_model');
    $this->load->model('Room_model');
    $this->load->model('User_model');
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
		$data['ruang'] = $this->Room_model->getSatuRuangan($ruangan);
		$data['menit'] = $this->Movie_model->hoursToMinutes($data['movie']['waktu_film']);
    $data['user'] = $this->User_model->getMyData($this->session->userdata('user_id'));
		$data['umur'] = $this->User_model->hitungUmur($this->session->userdata('user_id'));
		if ($data['movie']['is_released'] == 1) {
			$this->load->view('user/booking', $data);
		}else{
			$this->load->view('user/unreleased', $data);
		}
	}
	
	public function showPlaying()
  {
		$url = $this->input->get('id');
    $ruangan = $this->input->get('ruangan');
    $data['movie'] = $this->Movie_model->get_movie($url);
    $data['kursi'] = $this->Room_model->get_kursi($ruangan);
		$data['ruang'] = $this->Room_model->getSatuRuangan($ruangan);
		$data['menit'] = $this->Movie_model->hoursToMinutes($data['movie']['waktu_film']);
    $data['user'] = $this->User_model->getMyData($this->session->userdata('user_id'));
    $data['umur'] = $this->User_model->hitungUmur($this->session->userdata('user_id'));
    $this->load->view('user/inBooking', $data);
	}

  public function showOrderMovie()
  {
    $data['id_ruangan'] = $this->input->post('id_ruangan');
    $fake = $this->input->post('id_movie');
    $data['id_kursi'] = $this->input->post('kursi');
    $data['movie'] = $this->Movie_model->get_movie($fake);
		$data['nama_teater'] = $this->Movie_model->namaRuangan($data['id_ruangan']);
    $this->load->view('user/konfirmasiBooking', $data);
  }

  public function orderMovie()
  {
    $harga_movie = $this->input->post('harga');

    $data = [
      'id_order' => '',
      'id_user' => $this->session->userdata('user_id'),
      'id_ruangan' => $this->input->post('id_ruangan'),
      'nama_ruangan' => $nama_ruangan,
      'id_movie' => $this->input->post('id_movie'),
      'id_kursi' => $this->input->post('kursi'),
      'jumlah_tiket' => 1,
      'total_pembayaran' => $harga_movie
    ];
    $this->Movie_model->orderMovie($data, $data['id_kursi']);
    redirect('dashboard');
  }

  public function now(){
    $Movie_model['data'] = $this->Movie_model->ShowNow();
		$this->load->view('user/now', $Movie_model);

  }

  public function teater(){
		$Room_model['data'] = $this->Room_model->ShowData();
		$this->load->view('user/teater', $Room_model);
  }

  public function soon(){
    $Movie_model['data'] = $this->Movie_model->ShowSoon();
		$this->load->view('user/coming', $Movie_model);

  }
  	
	public function showTheaterPlaying(){
		$ruangan = $this->input->get('ruangan');
		$Movie_model['data'] = $this->Movie_model->ShowInRoom($ruangan);
		$this->load->view('user/inTheater', $Movie_model);
  }

  public function EditUser()

	{
    $data['script'] = $this->load->view('include/script',NULL,TRUE);
    $data['param'] = $this->User_model->getMyData($this->session->userdata('user_id'));
    $data['history'] = $this->User_model->getHistory($this->session->userdata('user_id'));
		$this->load->view('user/user_edit',$data);
	}

	public function ShowProfile(){
    $data['script'] = $this->load->view('include/script',NULL,TRUE);
    $data['param'] = $this->User_model->getMyData($this->session->userdata('user_id'));
    $data['history'] = $this->User_model->getHistory($this->session->userdata('user_id'));
		$this->load->view('user/profile',$data);
	}

	public function ShowHistory(){
    $data['script'] = $this->load->view('include/script',NULL,TRUE);
    $data['param'] = $this->User_model->getMyData($this->session->userdata('user_id'));
    $data['history'] = $this->User_model->getHistory($this->session->userdata('user_id'));
		$this->load->view('user/history',$data);
	}

	public function Edit(){

		$config['upload_path'] = "./assets/posters/";
		$config['allowed_types'] = "gif|jpg|png";
		$config['max_size'] = "100000";
		$this->load->library('upload',$config);
		
		$stat = $this->upload->do_upload('posternew');
		$pict = '/assets/posters/'.$_FILES['posternew']['name'];

		if($poster_movie == '/assets/posters/'){
			echo $stat;
      $user_id = $this->input->post('id_user');
			
			$username = $this->input->post('username');
      $password = $this->input->post('password');
      $nama_user = $this->input->post('nama_user');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$role = $this->input->post('role');
			$pict = $this->input->post('pict');

			$this-> User_model -> UpdateData($user_id,$username,$password,$nama_user,$tanggal_lahir,$role, $this->input->post('pict'));
			redirect('Booking','refresh');

		}else{

			echo $pict;
      $user_id = $this->input->post('id_user');
			
			$username = $this->input->post('username');
      $password = $this->input->post('password');
      $nama_user = $this->input->post('nama_user');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$role = $this->input->post('role');
			$pict = $this->input->post('pict');

      $this-> User_model -> UpdateData($user_id,$username,$password,$nama_user,$tanggal_lahir,$role, $pict);
			redirect('Booking','refresh');

		}
  }
  
  public function sortByName()
   {
      $param = $this->uri->segment(3);
      $data['title'] = "Sort Movie";

      if($param == 'descending') {
        $this->db->order_by("nama_movie", "desc");
      }
      else {
        $this->db->order_by("nama_movie", "asc");
      }
      $data['data'] = $this->db->get('movies')->result_array();
      $this->load->view('user/now', $data);
   }

  public function search()
  {
    $keyword = $this->input->get('search');
    $data['data'] = $this->Movie_model->searchMovie($keyword);
    $this->load->view('user/now', $data);
  }

  public function filter()
  {
    $user = $this->User_model->getMyData($this->session->userdata('user_id'));
    $tanggal = new DateTime($user['tanggal_lahir']);
    $today = new DateTime('today');
    $usiaku = $today->diff($tanggal)->y;
    $data['data'] = $this->Movie_model->filterYangBisaKutonton($usiaku); 
    $this->load->view('user/now', $data);
  }
}
