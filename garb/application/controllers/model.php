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
	function gallery(){
		$data['model']=$this->m_model->read_model()->result();
		$this->load->view('v_gallery',$data);
	}
	function tambah(){
		$this->load->view('v_model_tambah');
	}
	function edit($id){
		$where = array('id_model' => $id);
		$data['model'] = $this->m_model->edit_data($where,'model')->result();
		$this->load->view('v_model_edit',$data);
	}
	function aksi_update(){
		$this->load->library('upload');
		$path = './assets/uploads/';
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5024'; //maksimum besar file 2M
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
                  'nama_model' =>$this->input->post('nama'),
					'ukuran' =>$this->input->post('ukuran'),
					'warna' =>$this->input->post('warna'),
					'harga' =>$this->input->post('harga'),
					'foto' =>$gbr['file_name']
                   
                );
				$where = array('id_model'=> $this->input->post('id'));
 			
				@unlink($path.$lama);
				
				$this->m_model->update_data($where,$data,'model');
                
                
                redirect('model'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                
                redirect('model'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
			$data = array(
                  'nama_model' =>$this->input->post('nama'),
					'ukuran' =>$this->input->post('ukuran'),
					'warna' =>$this->input->post('warna'),
					'harga' =>$this->input->post('harga'),
					'foto' => $lama
                   
                );
				$where = array('id_model'=> $this->input->post('id'));
				$this->m_model->update_data($where,$data,'model');
                redirect('model'); 
		}
	}
	
	function hapus($id){
		$where = array('id_model' => $id);
		$path= './assets/uploads/';
		$data = $this->m_model->get_data($where);
		@unlink($path.$data->foto);
		
		
		$this->m_model->hapus($where,'model');
		redirect(base_url('model'));
		
	}
	function aksi_tambah(){
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '5024'; //maksimum besar file 2M
        $config['max_width']  = '2000'; //lebar maksimum 1288 px
        $config['max_height']  = '2000'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
         
        if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
                $gbr = $this->upload->data();
                $data = array(
					'id_model' => $this->input->post('id'),
                  'nama_model' =>$this->input->post('nama'),
					'ukuran' =>$this->input->post('ukuran'),
					'warna' =>$this->input->post('warna'),
					'harga' =>$this->input->post('harga'),
					'foto' =>$gbr['file_name']
                   
                );
 
                $this->m_model->tambah($data); //akses model untuk menyimpan ke database
                
                redirect('model'); //jika berhasil maka akan ditampilkan view vupload
            }else{
                
                redirect('model'); //jika gagal maka akan ditampilkan form upload
            }
        }
	}
}
?>