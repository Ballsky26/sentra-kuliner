<?php
	class Model_kontak extends CI_Model
	{
		//kontak
		public function tampil_data()
		{
			return $this->db->get('kontak');
		}
		//pesan
		public function tampil_pesan()
		{
			return $this->db->get('pesan');
		}
		public function hapus_pesan($id)
    	{
	        $this->db->where('id', $id);
	        $this->db->delete('pesan');
    	}
    	public function getpesanbyid($id)
    	{
    		return $this->db->get_where('pesan', ['id' => $id])->row_array();
    	}
    	public function kirim_pesan($data, $table)
		{
			$this->db->insert($table, $data);
		}
		//dashboard
		public function tampil_data_dashboard()
		{
			return $this->db->get('dashboard');
		}
		public function edit_dashboard()
		{
			$data = [
				"dashboard" => $this->input->post('dashboard', true),
			];
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('dashboard', $data);

		}
		public function getdashboardbyid($id)
    	{
    		return $this->db->get_where('dashboard', ['id' => $id])->row_array();
    	}
    	function kunjungan(){
        $ip      = $_SERVER['REMOTE_ADDR'];
        $tanggal = date("Y-m-d");
        $waktu   = time(); 
        $cekk = $this->db->query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
        $rowh = $cekk->row_array();
        if($cekk->num_rows() == 0){
            $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>'1', 'online'=>$waktu);
            $this->db->insert('statistik',$datadb);
        }else{
            $hitss = $rowh['hits'] + 1;
            $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>$hitss, 'online'=>$waktu);
            $array = array('ip' => $ip, 'tanggal' => $tanggal);
            $this->db->where($array);
            $this->db->update('statistik',$datadb);
        	}
	    }
    	function grafik_kunjungan(){
        return $this->db->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10");
    	}
    	function join($table,$tbljoin,$join)
    	{
	        $this->db->join($tbljoin,$join);
	        return $this->db->get($table);
    	}
	}
?>