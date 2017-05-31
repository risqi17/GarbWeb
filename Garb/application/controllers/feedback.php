<?php
class Feedback extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_feedback');
	$this->load->helper('url');
	}	
	function index(){
		$data['saran']=$this->m_feedback->read_feedback()->result();
		$this->load->view('v_feedback',$data);
	}
}
?>