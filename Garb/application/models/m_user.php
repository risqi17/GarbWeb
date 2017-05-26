<?php
 class m_user extends CI_Model{
	 function read_user(){
		 return $this->db->get('user');
	
 }
	 function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 }
 ?>