<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MoviePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Movies');
	}

	public function index(){
		$movies['data'] = $this->Movies->ShowData();
		$data['script'] = $this->load->view('include/script.php',NULL,TRUE);
		$data['table'] = $this->load->view('template/table.php',$movies, TRUE);
		$this->load->view('admin/dashboard.php',$data);
	}

	public function ShowDetail(){
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['detail'] = $this->Movies->ShowDetail($_GET['id']);
		$this->load->view('admin/movie_details',$data);
	}

	public function AddMovie(){
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$this->load->view('admin/movie_add',$data);
	}

	public function validate_image(){
		$config = array(
			'allowed_types'=>'jpg|png',
			'upload_path'=> 'assets/posters',
			'max_size'=>1024
			);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('poster'))
			{
				$this->form_validation->set_message('validate_image',$this->upload->display_errors());
				return false;
			} else {
				return true;
			}
	}

	public function Add()
	{
		$this->form_validation->set_rules('nama_movie','NAMA MOVIE','required|alpha_numeric');
		$this->form_validation->set_rules('genre_movie','GENRE MOVIE','required|numeric|max_length[100]|min_length[50]');
		$this->form_validation->set_message('required', 'You Must Provide a String !');
		$this->form_validation->set_rules('sinopsis','SINOPSIS','required|max_length[100]');
		$this->form_validation->set_rules('minimal_usia','MINIMAL USIA','required|numeric');
		$this->form_validation->set_rules('release_date','RELEASE DATE','required|numeric');
		$this->form_validation->set_rules('waktu_film','WAKTU FILM','required|numeric');
		$this->form_validation->set_rules('poster', 'Image', 'callback_validate_image');
		$this->form_validation->set_rules('harga_movie','HARGA MOVIE','required|alpha_numeric');
	
 
		if($this->form_validation->run() != false){
			// $config['upload_path'] = "./assets/posters/";
			// $config['allowed_types'] = "gif|jpg|png";pp
			// $config['max_size'] = "100000";
			$this->load->library('upload',$config);
			
			$stat = $this->upload->do_upload('poster');
			$poster_movie = '/assets/posters/'.$_FILES['poster']['name'];

			if($stat) {

				$nama_movie = $this->input->post('nama_movie');
				$genre_movie = $this->input->post('genre_movie');
				$sinopsis = $this->input->post('sinopsis');
				$minimal_usia = $this->input->post('minimal_usia');
				$release_date = $this->input->post('release_date');
				$waktu_film = $this->input->post('waktu_film');
				$poster_movie = $this->input->post('poster_movie');
				$harga_movie = $this->input->post('harga_movie');

				$this-> Movies -> AddData($nama_movie,$genre_movie,$sinopsis,$minimal_usia,$release_date,$waktu_film,$poster_movie,$harga_movie);
				redirect('MoviePage','refresh');

			} else {
				echo "gagal";
			}
		}else{
			
			$data['script'] = $this->load->view('include/script',NULL,TRUE);
			
			$this->load->view('admin/movie_add', $data);
		}
	}

	public function EditMovie($param)
	{
		
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
	
		$data['param'] = $this->Movies->ShowDetail($param);

		$this->load->view('admin/movie_edit',$data);
	}

	public function Edit(){

		$config['upload_path'] = "./assets/posters/";
		$config['allowed_types'] = "gif|jpg|png";
		$config['max_size'] = "100000";
		$this->load->library('upload',$config);
		
		$stat = $this->upload->do_upload('posternew');
		$poster_movie = '/assets/posters/'.$_FILES['posternew']['name'];

		if($poster_movie == '/assets/posters/'){
			echo $stat;

			$id_movie = $this->input->post('id_movie');
			$nama_movie = $this->input->post('nama_movie');
			$genre_movie = $this->input->post('genre_movie');
			$sinopsis = $this->input->post('sinopsis');
			$minimal_usia = $this->input->post('minimal_usia');
			$release_date = $this->input->post('release_date');
			$waktu_film = $this->input->post('waktu_film');
			$poster_movie = $this->input->post('poster_movie');
			$harga_movie = $this->input->post('harga_movie');

			$this-> Movies -> UpdateData($id_movie,$nama_movie,$genre_movie,$sinopsis,$minimal_usia,$release_date,$waktu_film,$poster_movie,$harga_movie, $this->input->post('poster'));
			redirect('MoviePage','refresh');

		}else{

			echo $poster_movie;

			$id_movie = $this->input->post('id_movie');
			$nama_movie = $this->input->post('nama_movie');
			$genre_movie = $this->input->post('genre_movie');
			$sinopsis = $this->input->post('sinopsis');
			$minimal_usia = $this->input->post('minimal_usia');
			$release_date = $this->input->post('release_date');
			$waktu_film = $this->input->post('waktu_film');
			$poster_movie = $this->input->post('poster');
			$harga_movie = $this->input->post('harga_movie');

			$this-> Movies -> UpdateData($id_movie,$nama_movie,$genre_movie,$sinopsis,$minimal_usia,$release_date,$waktu_film,$poster_movie,$harga_movie);
			redirect('MoviePage','refresh');

		}
	}
}

?>
