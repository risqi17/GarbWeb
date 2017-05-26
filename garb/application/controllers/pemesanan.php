<?php
class pemesanan extends CI_Controller{
	public $model=NULL;
	function __construct(){
	parent::__construct();
	$this->load->model('pemesanan_model');
	$this->model=$this->pemesanan_model;
	$this->load->database();
	$this->load->helper('url');
	}	
	function index(){
		$data['pemesanan']=$this->pemesanan_model->read_pemesanan()->result();
		$this->load->view('v_pemesanan',$data);
	}
}
?>