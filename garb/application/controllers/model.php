<?php
class Model extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_model');
	$this->load->helper('url');
	}	
	function index(){
		$data['model']=$this->m_model->read_model()->result();
		$this->load->view('v_model',$data);
	}
}
?>