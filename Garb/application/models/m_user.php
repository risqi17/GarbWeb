<?php
 class m_user extends CI_Model{
	 function read_user(){
		 return $this->db->get('user');
	
 }
 }
 ?>