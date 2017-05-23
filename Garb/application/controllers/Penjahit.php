<?php
class Penjahit extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('m_penjahit');
	$this->load->helper('url');
	}	
	function index(){
		$data['penjahit']=$this->m_penjahit->read_penjahit()->result();
		$this->load->view('v_penjahit',$data);
	}
	function verifikasi(){
		$username = $this->input->post('username');
		$code = '';

		$data = array(
			'ver_code' => $code
		);

		$where = array(
			'id_pjh' => $username
		);

		$this->m_penjahit->verifikasi($where,$data,'penjahit');
		redirect('penjahit/index');
	}
	
	function hapus($id){
		$where = array('id_pjh' => $id);
		$this->m_penjahit->hapus_data($where,'penjahit');
		redirect(base_url('penjahit'));
	}
}
?>