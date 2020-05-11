<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room_model extends CI_Model
{
  public function get_kursi($ruangan) {
    $this->db->select('*');
    $this->db->from('kursi');
    $this->db->where('id_ruangan', $ruangan);
    $query = $this->db->get();
    return $query->result_array();
  }

}