<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie_model extends CI_Model
{
  public function get_movies() {
    $query = $this->db->get('movies');
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

}