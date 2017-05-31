<?php
 class m_model extends CI_Model{
	 function read_model(){
		 return $this->db->get('model');
	
 }
	 function tambah($data){
       $this->db->insert('model', $data);
       return TRUE;
    }
	 
	  function get_data($where){		
		$this->db->from('model');
        $this->db->where($where);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() == 1) {
            return $query->row();
        }
	}
	 
	 function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	 function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	 function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 }
 ?>