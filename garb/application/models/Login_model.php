<?php
class Login_model extends CI_Model{
	public $username;
	public $password;
	
	public $label = [];
	
	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();
	}
	
	public function cek_log(){
		//$sql = sprintf("SELECT COUNT(*) AS hitung FROM 'user' WHERE user='%s' AND 
						//password='%s'",
		$sql=sprintf("SELECT * FROM administrator WHERE username='%s' AND password='%s'",
		$this->username,
		$this->password);
		$query = $this->db->query($sql);
		//$row = $query->row_array();
		//return $row['cnt'] == 1;
		return $query->result();
	}
	
	private function _attributeLabels(){
		return [
		'username'=>'Username:',
		'password'=>'Password :'
		];
	}
}
?>