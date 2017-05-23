<?php
 class m_penjahit extends CI_Model{
	 function read_penjahit(){
		 return $this->db->get('penjahit');
		 
	 }
	 function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	 function verifikasi($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 }
 ?>