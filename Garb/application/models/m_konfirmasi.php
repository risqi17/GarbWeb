<?php
 class m_konfirmasi extends CI_Model{
	 function read_penjahit(){
		 return $this->db->get('penjahit');
	
 }
 ?>