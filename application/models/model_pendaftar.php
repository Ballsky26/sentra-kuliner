<?php
	class Model_pendaftar extends CI_Model
	{
		
		public function tampil_data()
		{
			return $this->db->get('pendaftar');
		}
		public function tambah_pendaftar($data,$table)
		{
			$this->db->insert('pendaftar', $data);
		}
		public function tambah_pemilik($data,$table)
		{
			$this->db->insert($table, $data);
		}
		public function tambah_laporan($data,$table)
		{
			$this->db->insert($table, $data);
		}		
		public function hapus_pendaftar($id)
    	{
	        $this->db->where('id', $id);
	        $this->db->delete('pendaftar');
    	}
    	public function getpendaftarbyid($id)
    	{
    		return $this->db->get_where('pendaftar', ['id' => $id])->row_array();
    	}
    	//wawancara
    	public function tambah_wawancara($data,$table)
		{
			$this->db->insert($table, $data);
		}
		public function tampil_wawancara()
		{
			return $this->db->get('wawancara');
		}
		public function hapus_wawancara($id)
    	{
	        $this->db->where('id', $id);
	        $this->db->delete('wawancara');
    	}
    	public function getwawancarabyid($id)
    	{
    		return $this->db->get_where('wawancara', ['id' => $id])->row_array();
    	}
	    function cek_pendaftar($id = '', $nik) {
	        $this->db->where('nik', $nik);
	        if($id) {
	            $this->db->where_not_in('id', $id);
	        }
	        return $this->db->get('pendaftar')->num_rows();
	    }
	}
?>