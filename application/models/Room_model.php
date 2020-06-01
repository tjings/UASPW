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

  public function getSatuRuangan($ruangan) {
    $this->db->select('*');
    $this->db->from('ruangan');
    $this->db->where('id_ruangan', $ruangan);
    $query = $this->db->get()->row_array();
		return $query;
	}

	public function ShowData() {
		$query = $this->db->query("SELECT * FROM ruangan");
		return $query->result_array();
	}
	
	public function AddRuangan($nama_ruangan, $panjang_ruangan, $lebar_ruangan, $logo)
	{
		$values = array(
			'id_ruangan' => NULL,
			'nama_ruangan' =>$nama_ruangan,
			'panjang_ruangan' => $panjang_ruangan,
			'lebar_ruangan' => $lebar_ruangan,
			'logo' => $logo
		);
		
		$this->db->trans_begin();

		$this->db->insert('ruangan', $values);

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
