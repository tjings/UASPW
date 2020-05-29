<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
  
    public function get_user() {
      $query = $this->db->get('login');
      return $query->result_array();
		}
		
  public function getMyData($user_id)
  {
    $this->db->select('*');
    $this->db->from('login');
    $this->db->where('id_user', $user_id);
    return $this->db->get()->row_array();
  }

  public function ShowDetail($user_id)
		{
			$this->db->trans_begin();

			$query = $this->db->query("SELECT * FROM login where id_user = $user_id");
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

  public function hitungUmur($user_id)
  {
    $this->db->select("(YEAR(CURDATE()) - YEAR(tanggal_lahir)) AS umur");
    $this->db->from('login');
    $this->db->where('id_user', $user_id);
    return $this->db->get()->row()->umur;
  }

  public function UpdateData($user_id,$username,$password,$nama_user,$tanggal_lahir,$role, $pict)
		{
			$values = array(
                'id_user' => $user_id,
				        
                'username' => $username,
                'password' => $password,
                'nama_user' => $nama_user,
                'tanggal_lahir' => $tanggal_lahir,
                'role' => $role,
                'pict' => $pict
                
			);
			
			$this->db->trans_begin();

			$this->db->Replace('login',$values);

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

	public function getHistory($id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->join('movies', 'orders.id_movie = movies.id_movie');
		$this->db->where('id_user', $id);
		return $this->db->get()->result_array();
	}

}