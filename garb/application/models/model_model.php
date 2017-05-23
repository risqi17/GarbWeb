<?php
 class model_model extends CI_Model{
	 function read_model(){
		 return $this->db->get('model');
	 }
 }
 ?>
 