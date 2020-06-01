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

			$query = $this->db->query("SELECT * FROM movies where id_movie = $id");
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

		public function AddData($nama_movie, $genre_movie, $sinopsis, $minimal_usia, $release_date, $waktu_film, $poster_movie, $harga_movie,$is_released, $trailer, $id_ruangan)
		{
			$values = array(
				'id_movie' => NULL,
                'nama_movie' => $nama_movie,
                'genre_movie' => $genre_movie,
                'sinopsis' => $sinopsis,
                'minimal_usia' => $minimal_usia,
                'release_date' => $release_date,
                'waktu_film' => $waktu_film,
                'poster_movie' => $poster_movie,
				'harga_movie' => $harga_movie,
				'is_released' => $is_released,
				'trailer' => $trailer,
				'id_ruangan' => $id_ruangan
			);
			
			$this->db->trans_begin();

			$this->db->insert('movies', $values);

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

		public function deleteMovie($id)
		{
			$this->db->where('id_movie', $id);
			$this->db->delete('movies');
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
                'poster_movie' => $poster_movie,
                'harga_movie' => $harga_movie
			);
			
			$this->db->trans_begin();

			$this->db->where('id_movie', $id_movie);
			$this->db->update('movies', $values);

			$this->db->trans_complete();

			if($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
				return FALSE;
			}else
			{
				
			}
		}

		public function AddRuangan($index_kursi, $id_ruangan)
		{
			$values = array(
				'id_kursi' => NULL,
				'index_kursi' =>$index_kursi,
				'id_ruangan' => $id_ruangan,
				'is_booked' => 0
			);
			
			$this->db->trans_begin();

			$this->db->insert('kursi', $values);

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
