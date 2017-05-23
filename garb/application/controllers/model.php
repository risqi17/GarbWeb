<?php
class model extends CI_Controller{
	public $model=NULL;
	function __construct(){
	parent::__construct();
	$this->load->model('model_model');
	$this->model=$this->model_model;
	$this->load->database();
	$this->load->helper('url');
	}	
	function index(){
		$data['model']=$this->model_model->read_model()->result();
		$this->load->view('model_view',$data);
	}
}
?>