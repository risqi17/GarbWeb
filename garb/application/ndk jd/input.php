<?php
class input extends CI_Controller{
	public function index()
	{
		$this->load->view('form_input');
	}
	public function insert(){
	$data = array('id_user'=>$this->input->post('id',true),'nama_user' => $this->input->post('nama',true), 'email_user' =>$this->input->post('email',true),
		'telepon_user' =>$this->input->post('telepon',true),'jk_user' =>$this->input->post('jk',true),'foto_user' =>$this->input->post('foto',true),'alamat_user' =>$this->input->post('alamat',true),'password_user' =>$this->input->post('password',true));
		$insert = $this->prosesInsert('user',$data);
		if($insert > 0){
			redirect('input/index');
	}else{
		echo 'ggal';
}
}
}
?>