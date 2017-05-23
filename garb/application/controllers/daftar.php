<?php
class daftar extends CI_Controller{
	public $model=NULL;
	public function __construct(){
		parent::__construct();
		//load model fungsi
		$this->load->model('daftar_model');
		$this->model=$this->daftar_model;
		
		$this->load->database();
		$this->load->helper('url');//sebagai redirect
	}
	public function index(){
		$this->read();
		//$this->load->view('form_daftar');
	}
	public function insert(){
		if(isset($_POST['simpan'])){
			
			$this->model->username=$_POST['username'];
			$this->model->nama_admin=$_POST['nama'];
			$this->model->email=$_POST['email'];
			$this->model->password=$_POST['password'];
			
			$this->model->insert();
			//$this->load->view('alert_view');
			//echo "Berghasil Disimpan";
			/*$cek = $this->dafar_model->cek_daftar("administrator",$where)->num_rows();
			if($cek > 0){
				$this->load->view('alert_view');
			}*/
			redirect('daftar');
			
		
			
			
		}else{
			$this->load->view('form_daftar',['model'=>$this->model]);
			
		}
	}
	
	public function read(){
		$rows= $this->model->read();
		$this->load->view('login_view');	
	}
	
}