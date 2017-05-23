<?php
 class pemesanan_model extends CI_Model{
	 function read_pemesanan(){
		 return $this->db->get('pemesanan');
	 }
 }
 ?>
 