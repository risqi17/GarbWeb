<?php
class Konfirmasi_pjh extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_konfirmasi');
	$this->load->helper('url');
	}	
	function index(){
		$data['penjahit']=$this->m_konfirmasi->read_penjahit()->result();
		$this->load->view('v_konfirmasi',$data);
	}
}
?>