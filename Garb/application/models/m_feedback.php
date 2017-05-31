<?php
 class m_feedback extends CI_Model{
	 function read_feedback(){
		 return $this->db->get('saran');
	
 }
 }
 ?>