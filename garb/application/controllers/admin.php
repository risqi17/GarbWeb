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
			'password' => $password,
			'foto' => ''
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
			'password' => $password,
			'foto' => ''
		);

		$where = array(
			'username' => $username
		);

		$this->daftar_model->update_data($where,$data,'administrator');
		redirect('admin/index');
	}
	
	function profil(){
		$where = array('username' => $this->session->userdata('nama'));
		$data['administrator'] = $this->daftar_model->edit_data($where,'administrator')->result();
		$this->load->view('v_profil',$data);
	}
	function update_profil(){
		$this->load->library('upload');
		$path = './images/';
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10048'; //maksimum besar file 2M
        $config['max_width']  = '2000'; //lebar maksimum 1288 px
        $config['max_height']  = '2000'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
		$lama = $this->input->post('foto_lama');
         
        if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  
					'nama_admin' =>$this->input->post('nama'),
					'email' =>$this->input->post('email'),
					'password' => MD5($this->input->post('password')),
					'foto' =>$gbr['file_name']
                   
                );
				$where = array('username' =>$this->input->post('username'));
 			
				@unlink($path.$lama);
				
				$this->daftar_model->update_data($where,$data,'administrator');
                
                
                redirect('admin'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                
                redirect('admin'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
			$data = array(
                  'nama_admin' =>$this->input->post('nama'),
					'email' =>$this->input->post('email'),
					'password' => MD5($this->input->post('password')),
					'foto' => $lama
                   
                );
				$where = array('username' =>$this->input->post('username'));
				$this->daftar_model->update_data($where,$data,'administrator');
                redirect('admin'); 
		}
	}
	
	
}