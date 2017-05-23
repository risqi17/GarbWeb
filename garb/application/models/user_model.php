<?php
 class user_model extends CI_Model{
	 function read_user(){
		 return $this->db->get('user');
	 }
 }
 ?>
 