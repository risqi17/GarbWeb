<?php
 class m_konfirmasi extends CI_Model{
	 function read_penjahit(){
		 return $this->db->get('penjahit');
		 /*$sql="SELECT  * FROM barang ORDER BY kode";
		$query=$this->db->query($sql);
		return $query->result();*/
	 }
	 //public function konfirmasi(){
		//$sql=sprintf("UPDATE penjahit SET status='lunas' WHERE id_pembayaran='%s'",$this->id_pembayaran);
		//$this->db->query($sql);
	
 }
 ?>