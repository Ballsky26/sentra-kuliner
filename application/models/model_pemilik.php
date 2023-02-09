<?php
	class Model_pemilik extends CI_Model
	{
		public function tampil_data()
		{
			return $this->db->get('pemilik');
		}
		public function tambah_pemilik($data,$table)
		{
			$this->db->insert($table, $data);
		}
		public function hapus_pemilik($id)
    	{
	        $this->db->where('id', $id);
	        $this->db->delete('pemilik');
    	}
    	public function getpemilikbyid($id)
    	{
    		return $this->db->get_where('pemilik', ['id' => $id])->row_array();
    	}
    	public function laporan()
    	{
	        $this->db->select('*');
	        $this->db->from('laporan');
	        $this->db->join('pemilik', 'pemilik.email = laporan.email');
	        return $this->db->get();
    	}
    	function check_nokios($id = '', $nokios) {
        $this->db->where('nokios', $nokios);
        if($id) {
            $this->db->where_not_in('id', $id);
        }
        return $this->db->get('pemilik')->num_rows();
    	}
    	//kios
    	public function tampil_datakios()
		{
			$this->db->select('*');
	        $this->db->from('kios');
	        $this->db->join('pemilik', 'pemilik.nokios = kios.nokios');
	        return $this->db->get();
		}
		public function tampil_kios()
		{
	        $this->db->from('kios');
			$this->db->order_by("nokios", "asc");
			return $this->db->get(); 
		}
		public function tambah_kios($data,$table)
		{
			$this->db->insert($table, $data);
		}
		public function hapus_kios($id)
    	{
	        $this->db->where('id', $id);
	        $this->db->delete('kios');
    	}
    	public function getkiosbyid($id)
    	{
    		return $this->db->get_where('kios', ['id' => $id])->row_array();
    	}
	}