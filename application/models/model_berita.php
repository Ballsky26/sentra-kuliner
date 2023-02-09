<?php
	class Model_berita extends CI_Model
	{
		
		public function tampil_data()
		{
			return $this->db->get('berita');
		}
		public function tambah_berita($data,$table)
		{
			$this->db->insert('berita', $data);
		}
		public function hapus_berita($id)
    	{
	        $this->db->where('id', $id);
	        $this->db->delete('berita');
    	}
    	public function getberitabyid($id)
    	{
    		return $this->db->get_where('berita', ['id' => $id])->row_array();
    	}
    	
	}
?>