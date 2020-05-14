 <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class Register extends CI_Model{

       function daftar($data)
       {
            $this->db->insert('login',$data);
       }
  }