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

  function edit_data($where,$table){		
    return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
  // public function UpdateData($user_id,$username,$password,$nama_user,$tanggal_lahir,$role, $pict)
	// 	{
	// 		$values = array(
                // 'id_user' => $user_id,
				        
                // 'username' => $username,
                // 'password' => $password,
                // 'nama_user' => $nama_user,
                // 'tanggal_lahir' => $tanggal_lahir,
                // 'role' => $role,
                // 'pict' => $pict
                
	// 		);
			
	// 		$this->db->trans_begin();

	// 		$this->db->Replace('login',$values);

	// 		$this->db->trans_complete();

	// 		if($this->db->trans_status() === FALSE)
	// 		{
	// 			$this->db->trans_rollback();
	// 			return FALSE;
	// 		}else
	// 		{
	// 			//Type your code here ...
	// 		}
	// 	}

}