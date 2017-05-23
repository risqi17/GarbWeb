<?php
class User extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_user');
	$this->load->helper('url');
	}	
	function index(){
		$data['user']=$this->m_user->read_user()->result();
		$this->load->view('v_user',$data);
	}
}
?>