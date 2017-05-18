<?php
class input_model extends CI_Model{
	public function prosesInsert($a,$data){
		$insert=$this->db->insert($a,$data);
		return $insert;
	}
}


?>
