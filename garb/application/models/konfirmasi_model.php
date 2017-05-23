<?php
class konfirmasi_model extends CI_Model{
	/*function ambil_data(){
		return $this->db->get('barang');
	}*/
	public $id_pembayaran;
	public $id_pemesanan;
	public $jenis_bayar;
	public $jumlah_bayar;
	public $status;
	public $label=[];
	
	public function __construct(){
		parent::__construct();
		$this->labels=$this->_attributeLabels();
			$this->load->database();//fungsi untuk membuat database (library>
	}
	public function update(){
		$sql=sprintf("update pembayaran set status='lunas' WHERE kode_up='%s'",$this->id_pembayaran);
		$this->db->query($sql);
	}
	
	function read(){
		 return $this->db->get('pembayaran');
	}
	/*public function read(){
		
		$sql="SELECT  * FROM pembayaran ORDER BY id_pembayaran";
		$query=$this->db->query($sql);
		return $query->result();
	}*/	
	private function _attributeLabels(){
		return [
			'id_pembayaran'=>'id pembayaran: ',
			'id_pemesanan'=>'id pemesanan: ',
			'jenis_bayar'=>'jenis bayar: ',
			'jumlah_bayar'=>'jumlah bayar: ',
			'status' =>'status'
		];
	}
}