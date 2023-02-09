<?php
	class Model_staff extends CI_Model
	{
		
		public function tampil_data()
		{
			return $this->db->get('staff');
		}
		public function tambah_staff($data,$table)
		{
			$this->db->insert($table, $data);
		}
		public function hapus_staff($id)
    	{
	        $this->db->where('id', $id);
	        $this->db->delete('staff');
    	}
		public function getstaffbyid($id)
    	{
    		return $this->db->get_where('staff', ['id' => $id])->row_array();
    	}	
	}
