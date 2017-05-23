<?php
class konfirmasi extends CI_Controller{
	public $model=NULL;
	public function __construct(){
		parent::__construct();
		//load model fungsi
		$this->load->model('konfirmasi_model');
		$this->model=$this->konfirmasi_model;
		$this->load->database();
		$this->load->helper('url');//sebagai redirect
	}
	public function index(){
	//$this->read();
		$data['pembayaran']=$this->pembayaran_model->read_pembayaran()->result();
		$this->load->view('pembayaran_view',$data);
	}
	
	public function read(){
		$rows= $this->model->read();
		$this->load->view('konfirmasi_view',['row'=>$row]);	
	}
	public function update($kode_up){
		$this->model->kode=$kode_up;
		$this->model->update();
		redirect('konfirmasi');
	}
}