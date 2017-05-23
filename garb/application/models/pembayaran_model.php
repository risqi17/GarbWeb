<?php
 class pembayaran_model extends CI_Model{
	 function read_pembayaran(){
		 return $this->db->get('pembayaran');
		 /*$sql="SELECT  * FROM barang ORDER BY kode";
		$query=$this->db->query($sql);
		return $query->result();*/
	 }
	 /*public function konfirmasi(){
		$sql=sprintf("UPDATE pembayaran SET status='lunas' WHERE id_pembayaran='%s'",$this->id_pembayaran);
		$this->db->query($sql);
	}*/
 }
 ?>