<?php
class pembayaran extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('pembayaran_model');
	$this->load->helper('url');
	}	
	function index(){
		$data['pembayaran']=$this->pembayaran_model->read_pembayaran()->result();
		$this->load->view('pembayaran_view',$data);
	}
	/*public function konfirmasi($kode_kon){
		$this->model->id_pembayaran=$kode_kon;
		$this->model->konfirmasi();
		redirect('daftar');
	}*/
}
?>