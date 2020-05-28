<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie_model extends CI_Model
{
  public function get_movies() {
    $query = $this->db->get('movies');
    return $query->result_array();
  }

  public function ShowData() {
		$query = $this->db->query("SELECT * FROM movies");
		return $query->result_array();
	}

	public function ShowInRoom($ruangan) {
		$query = $this->db->query("SELECT * FROM movies WHERE id_ruangan = '$ruangan'");
		return $query->result_array();
	}

	public function ShowSoon() {
		$query = $this->db->query("SELECT * FROM movies WHERE is_released=0");
		return $query->result_array();
	}

	public function ShowNow() {
		$query = $this->db->query("SELECT * FROM movies WHERE is_released=1");
		return $query->result_array();
	}

  public function get_movie($id) {
    $this->db->select('*');
    $this->db->from('movies');
    $this->db->where('id_movie', $id);
    $this->db->limit(1);
    $query = $this->db->get();

    // Pasti hanya 1 hasil, maka row_array. Ekivalen dari mysqli_fetch_array().
    return $query->row_array();
  }

  public function orderMovie($data, $id_kursi) {
    $this->db->query("UPDATE kursi SET is_booked = 1 WHERE id_kursi = '$id_kursi'");
    $this->db->insert('orders', $data);
	}
	
	public function hoursToMinutes($hours) { 
    $minutes = 0; 
    if (strpos($hours, ':') !== false) 
    { 
        // Split hours and minutes. 
        list($hours, $minutes) = explode(':', $hours); 
    } 
    return $hours * 60 + $minutes; 
} 

  public function buyTicket($data)
  {
    $this->db->set($data);
    $this->db->replace('movies', $data);
  }

  public function sortMovie($choice){
    $this->db->select('*');
    $this->db->from('movies');

    if($choice === 1){
      $this->db->order_by('movie_name DESC');
    }
    else{
      $this->order_by('movie_name ASC');
    }
    $query = $this->db->get();

    return $query->result_array();
  }
}
