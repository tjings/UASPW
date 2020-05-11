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

  public function purchase_ticket($id_kursi, $id_user, $id_movie, $id_ruangan, $jumlah_tiket, $total_bayar) {
    $this->db->query("UPDATE kursi SET is_booked = 1 WHERE id_kursi = '$id_kursi'");
    $this->db->query("INSERT INTO orders VALUES('', '$id_user', '$id_movie', '$id_ruangan', '$id_kursi', '$jumlah_tiket', '$total_bayar')");
  }

}