<?php
class daftar_model extends CI_Model{
	/*function ambil_data(){
		return $this->db->get('barang');
	}*/
	public $username;
	public $nama_admin;
	public $email;
	public $password;
	
	public function __construct(){
		parent::__construct();
		$this->labels=$this->_attributeLabels();
			$this->load->database();//fungsi untuk membuat database (library>
	}
	public function insert(){
		$sql=sprintf("INSERT INTO administrator VALUES ('%s','%s','%s','%s')",
				$this->username,
				$this->nama_admin,
				$this->email,
				$this->password
				);
		$this->db->query($sql);
		
	}
	
		/*function cek_daftar($table,$where){		
		return $this->db->get_where($table,$where);
	}*/	
	

	public function read(){
		/*$sql="SELECT  * FROM barang ORDER BY kode";
		$query=$this->db->query($sql);
		return $query->result();*/
	}
	
	private function _attributeLabels(){
		return [
			'username'=>'Username: ',
			'nama_admin'=>'Nama: ',
			'email'=>'Email: ',
			'password'=>'Password: '
		];
	}
	
}
