<?php
class pembayaran extends CI_Controller{
	public $model=NULL;
	function __construct(){
	parent::__construct();
	$this->load->model('pembayaran_model');
	$this->model=$this->pembayaran_model;
	$this->load->database();
	$this->load->helper('url');
	}	
	function index(){
		$data['pembayaran']=$this->pembayaran_model->read_pembayaran()->result();
		$this->load->view('pembayaran_view',$data);
	}
	public function konfirmasi($kode_kon){
		$this->model->id_pembayaran=$kode_kon;
		$this->model->konfirmasi();
		redirect('pembayaran');
	}
	public function hapus($kode_del){
		$where = array('id_pembayaran'=>$kode_del);
		$this->pembayaran_model->hapus($where,'pembayaran');
		redirect('pembayaran');
	
	}
}
?>