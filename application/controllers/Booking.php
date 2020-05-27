<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Movie_model');
    $this->load->model('Room_model');
    $this->load->model('User_model');
    $this->load->helper('url');
  }

  public function index()
  {
    redirect('dashboard');
  }

  public function showBooking()
  {
    $url = $this->input->get('user_id');
    $ruangan = $this->input->get('ruangan');
    $data['movie'] = $this->Movie_model->get_movie($url);
    $data['kursi'] = $this->Room_model->get_kursi($ruangan);
		$data['ruang'] = $this->Room_model->getSatuRuangan($ruangan);
		$data['menit'] = $this->Movie_model->hoursToMinutes($data['movie']['waktu_film']);
    $data['user'] = $this->User_model->getMyData($this->session->userdata('user_id'));
    $data['umur'] = $this->User_model->hitungUmur($this->session->userdata('user_id'));
    $this->load->view('booking', $data);
  }

  public function orderMovie()
  {
    $harga_movie = $this->input->post('harga') * $this->input->post('jmlTiket');

    $data = [
      'user_id_order' => '',
      'user_id' => $this->session->userdata('user_id'),
      'user_id_ruangan' => $this->input->post('user_id_ruangan'),
      'user_id_movie' => $this->input->post('user_id_movie'),
      'user_id_kursi' => $this->input->post('kursi'),
      'jumlah_tiket' => 1,
      'total_pembayaran' => $harga_movie
    ];

    $this->Movie_model->orderMovie($data, $data['user_id_kursi']);
    redirect('dashboard');
  }

  public function now(){
    $Movie_model['data'] = $this->Movie_model->ShowNow();
    $Movie_model['movie'] = $this->Movie_model->ShowData();
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

  public function edit($user_id){
    $where = array('id_user' => $user_id);
    $data['login'] = $this->User_model->edit_data($where,'login')->result();
    $this->load->view('user/user_edit',$data);
  }

  function update(){
    $user_id = $this->input->post('id_user');
			
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama_user = $this->input->post('nama_user');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $role = $this->input->post('role');
    $pict = $this->input->post('pict');
   
    $data = array(
      'id_user' => $user_id,
				        
      'username' => $username,
      'password' => $password,
      'nama_user' => $nama_user,
      'tanggal_lahir' => $tanggal_lahir,
      'role' => $role,
      'pict' => $pict
    );
   
    $where = array(
      'id_user' => $user_id
    );
   
    $this->User_model->update_data($where,$data,'login');
    redirect('booking/index');
  }

  // public function EditUser($user_id)
	// {
  //   $data['script'] = $this->load->view('include/script',NULL,TRUE);
	
	// 	$data['user_id'] = $this->User_model->getMyData($user_id);

	// 	$this->load->view('user/user_edit');
	// }

// 	public function Edit(){

// 		$config['upload_path'] = "./assets/posters/";
// 		$config['allowed_types'] = "gif|jpg|png";
// 		$config['max_size'] = "100000";
// 		$this->load->library('upload',$config);
		
// 		$stat = $this->upload->do_upload('posternew');
// 		$pict = '/assets/posters/'.$_FILES['posternew']['name'];

// 		if($poster_movie == '/assets/posters/'){
// 			echo $stat;
      // $user_id = $this->input->post('user_id');
			
			// $username = $this->input->post('username');
      // $password = $this->input->post('password');
      // $nama_user = $this->input->post('nama_user');
			// $tanggal_lahir = $this->input->post('tanggal_lahir');
			// $role = $this->input->post('role');
			// $pict = $this->input->post('pict');

// 			$this-> User_model -> UpdateData($user_id,$username,$password,$nama_user,$tanggal_lahir,$role, $this->input->post('pict'));
// 			redirect('Booking','refresh');

// 		}else{

// 			echo $pict;
//       $user_id = $this->input->post('user_id');
			
// 			$username = $this->input->post('username');
//       $password = $this->input->post('password');
//       $nama_user = $this->input->post('nama_user');
// 			$tanggal_lahir = $this->input->post('tanggal_lahir');
// 			$role = $this->input->post('role');
// 			$pict = $this->input->post('pict');

//       $this-> User_model -> UpdateData($user_id,$username,$password,$nama_user,$tanggal_lahir,$role, $pict);
// 			redirect('Booking','refresh');

// 		}
// 	}


}
