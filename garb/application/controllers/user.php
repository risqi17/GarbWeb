<?php
class user extends CI_Controller{
	public $model=NULL;
	function __construct(){
	parent::__construct();
	$this->load->model('user_model');
	$this->model=$this->user_model;
	$this->load->database();
	$this->load->helper('url');
	}	
	function index(){
		$data['user']=$this->user_model->read_user()->result();
		$this->load->view('user_view',$data);
	}
}
?>