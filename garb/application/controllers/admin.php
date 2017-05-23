<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		
		$this->load->model('daftar_model');
		$this->load->helper('url');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data['administrator'] = $this->daftar_model->tampil_data()->result();
		$this->load->view('v_admin',$data);
	}
	
	function tambah(){
		$this->load->view('v_admin_tambah');
	}
 
	function tambah_aksi(){
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = MD5($this->input->post('password'));
 
		$data = array(
			'username' => $username,
			'nama_admin' => $nama,
			'email' => $email,
			'password' => $password
			);
		$this->daftar_model->input_data($data,'administrator');
		redirect(base_url('admin'));
	}
 
	function hapus($id){
		$where = array('username' => $id);
		$this->daftar_model->hapus_data($where,'administrator');
		redirect(base_url('admin'));
	}
	
	function edit($id){
		$where = array('username' => $id);
		$data['administrator'] = $this->daftar_model->edit_data($where,'administrator')->result();
		$this->load->view('v_admin_update',$data);
	}
	
	function update(){
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = MD5($this->input->post('password'));

		$data = array(
			'nama_admin' => $nama,
			'email' => $email,
			'password' => $password
		);

		$where = array(
			'username' => $username
		);

		$this->daftar_model->update_data($where,$data,'administrator');
		redirect('admin/index');
	}
	
	
}