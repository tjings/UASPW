<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
  public function getMyData($user_id)
  {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('id_user', $user_id);
    return $this->db->get()->row_array();
  }

  public function hitungUmur($user_id)
  {
    $this->db->select("(YEAR(CURDATE()) - YEAR(tanggal_lahir)) AS umur");
    $this->db->from('login');
    $this->db->where('id_user', $user_id);
    return $this->db->get()->row()->umur;
  }

}