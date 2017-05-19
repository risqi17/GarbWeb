<?php
 class pembayaran_model extends CI_Model{
	 function read_pembayaran(){
		 return $this->db->get('pembayaran');
	 }
	 public function konfirmasi(){
		 $sql=sprintf("UPDATE pembayaran SET status='sdh dikonfirmasi' WHERE id_pembayaran='%s'",$this->id_pembayaran);
		$this->db->query($sql);
	}
	public function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
 }
 ?>