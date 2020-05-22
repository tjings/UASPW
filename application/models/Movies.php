<?php 

	defined('BASEPATH') OR exit('No direct script access allowed !');

	class Movies extends CI_Model{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function ShowData()
		{
			
			$query = $this->db->query("SELECT * FROM movies");

			return $query->result_array();
		}

		public function ShowDetail($id)
		{
			$this->db->trans_begin();

			$query = $this->db->query("SELECT * FROM movies where id_movies = $id");
			return $query->result_array();

			$this->db->trans_complete();

			if($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				return FALSE;
			}else
			{
				//Type your code here ...
			}
		}

		public function AddData($nama_movie,$genre_movie,$sinopsis,$minimal_usia,$release_date,$waktu_film,$poster_movie,$harga_movie)
		{
			$values = array(
                'nama_movie' => $nama_movie,
                'genre_movie' => $genre_movie,
                'sinopsis' => $sinopsis,
                'minimal_usia' => $minimal_usia,
                'release_date' => $release_date,
                'waktu_film' => $waktu_film,
                'poster' => $poster_movie,
                'harga_movie' => $harga_movie;
			);
			
			$this->db->trans_begin();

			$this->db->insert('movies',$values);

			$this->db->trans_complete();

			if($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				return FALSE;
			}else
			{
				//Type your code here ...
			}
		}

		public function UpdateData($id_movie,$nama_movie,$genre_movie,$sinopsis,$minimal_usia,$release_date,$waktu_film,$poster_movie,$harga_movie)
		{
			$values = array(
                'id_movie' => $id_movie,
				'nama_movie' => $nama_movie,
                'genre_movie' => $genre_movie,
                'sinopsis' => $sinopsis,
                'minimal_usia' => $minimal_usia,
                'release_date' => $release_date,
                'waktu_film' => $waktu_film,
                'poster' => $poster_movie,
                'harga_movie' => $harga_movie;
			);
			
			$this->db->trans_begin();

			$this->db->Replace('movies',$values);

			$this->db->trans_complete();

			if($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				return FALSE;
			}else
			{
				//Type your code here ...
			}
		}
	}

?>