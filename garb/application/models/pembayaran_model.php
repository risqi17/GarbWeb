<?php
 class pembayaran_model extends CI_Model{
	 function read_pembayaran(){
		 return $this->db->get('pembayaran');
		 
	 }
	 
 }
 ?>