<?php

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email')){
       		redirect('auth');
	       }else if($this->session->userdata('role_id')!= 5){
	      redirect('auth/block');
	      }
	}
	public function index()
	{
		$data['judul'] = 'Dashboard Pemilik Kios';
		$data['user'] = $this->db->get_where('pemilik', ['email' => $this->session->userdata('email')])->row_array();
		$data['pemilik'] = $this->model_pemilik->tampil_data()->result();
		$this->load->view('pemilikkios/header', $data);
		$this->load->view('pemilikkios/sidebar', $data);
		$this->load->view('pemilikkios/dashboard', $data);
		$this->load->view('pemilikkios/footer');
	}
	public function edit()
	{
		$data['judul'] = 'Edit Profil';
		$data['user'] = $this->db->get_where('pemilik', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pemilikkios/header', $data);
			$this->load->view('pemilikkios/sidebar', $data);
			$this->load->view('pemilikkios/edit_profil', $data);
			$this->load->view('pemilikkios/footer');
		}
		else
		{
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$npwp = $this->input->post('npwp');
			$namakios = $this->input->post('namakios');
			$slogan = $this->input->post('slogan');
			$telpon = $this->input->post('telpon');	
			$tgl_lahir = $this->input->post('tgl_lahir');
			//gambar
			$fotoktp = $_FILES['fotoktp'];
				if ($fotoktp='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/ktp';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if ($this->upload->do_upload('fotoktp'))
	                {
	                	$old_image = $data['user']['fotoktp'];
			       		if ($old_image != '') {
			       			unlink(FCPATH . 'uploads/foto/ktp/'. $old_image);
			       		}
			       	        $new_image = $this->upload->data('file_name');
			       	        $this->db->set('fotoktp', $new_image);
	                }else{
	                	$fotoktp=$this->upload->data('file_name');
	                }
				}
			$fotokk = $_FILES['fotokk'];
				if ($fotokk='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/kk';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if ($this->upload->do_upload('fotokk'))
	                {
	                	$old_image = $data['user']['fotokk'];
			       		if ($old_image != '') {
			       			unlink(FCPATH . 'uploads/foto/kk/'. $old_image);
			       		}
			       	        $new_image = $this->upload->data('file_name');
			       	        $this->db->set('fotokk', $new_image);
	                }else{
	                	$fotokk=$this->upload->data('file_name');
	                }
				}
			$foto = $_FILES['foto'];
				if ($foto='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/profil';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if ($this->upload->do_upload('foto'))
	                {
	                	$old_image = $data['user']['foto'];
			       		if ($old_image != 'default.png') {
			       			unlink(FCPATH . 'uploads/foto/profil/'. $old_image);
			       		}
			       	        $new_image = $this->upload->data('file_name');
			       	        $this->db->set('foto', $new_image);
	                }else{
	                	$foto=$this->upload->data('file_name');
	                }
				}
			$this->db->set('nik', $nik);
			$this->db->set('nama', $nama);
			$this->db->set('alamat', $alamat);
			$this->db->set('npwp', $npwp);
			$this->db->set('namakios', $namakios);
			$this->db->set('slogan', $slogan);
			$this->db->set('telpon', $telpon);
			$this->db->set('tgl_lahir', $tgl_lahir);
			$this->db->where('email', $email);
			$this->db->update('pemilik');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('pemilikkios/dashboard');
		}
	}
	public function laporan()
	{
		$data['judul'] = 'Laporan Pendapatan';
		$data['user'] = $this->db->get_where('pemilik', ['email' => $this->session->userdata('email')])->row_array();
		// $data['laporan'] = $this->model_pemilik->laporan()->result();
		$this->form_validation->set_rules('pendapatan', 'Pendapatan', 'numeric|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pemilikkios/header', $data);
			$this->load->view('pemilikkios/sidebar', $data);
			$this->load->view('pemilikkios/laporan', $data);
			$this->load->view('pemilikkios/footer');	
		}
		else
		{
			$email = $this->input->post('email');
			$pendapatan = $this->input->post('pendapatan');

			$this->db->set('tahun', time());
			$this->db->set('pendapatan', $pendapatan);
			$this->db->where('email', $email);
			$this->db->update('pemilik');
			$this->load->library('mypdf');
			$this->mypdf->generate('pemilikkios/dompdf', $data);
			// $this->session->set_flashdata('flash', 'Di Update');
			redirect('pemilikkios/dashboard/laporan');
		}
	}
	public function edit_password()
	{
		$data['judul'] = 'Edit Password';
		$data['user'] = $this->db->get_where('pemilik', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[3]|matches[new_password1]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pemilikkios/header', $data);
			$this->load->view('pemilikkios/sidebar', $data);
			$this->load->view('pemilikkios/edit_password', $data);
			$this->load->view('pemilikkios/footer');
		}
		else
		{
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Salah Password Lama</div>');
				redirect('pemilikkios/dashboard/edit_password');
			}else{
				if ($current_password == $new_password) {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama dengan Password Lama</div>');
					redirect('pemilikkios/dashboard/edit_password');
					}else{
						$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
						$this->db->set('password', $password_hash);
						$this->db->where('email', $this->session->userdata('email'));
						$this->db->update('pemilik');
						$this->session->set_flashdata('flash', 'Diubah');
						redirect('pemilikkios/dashboard');
					}
				}
		}
	}
	public function cetak()
	{
		$this->load->library('mypdf');
		$data['user'] = $this->db->get_where('pemilik', ['email' => $this->session->userdata('email')])->row_array();
		$this->mypdf->generate('pemilikkios/dompdf', $data);

	}
	public function keterangan()
	{
		$data['judul'] = 'Keterangan Home';
		$data['user'] = $this->db->get_where('pemilik', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('pemilikkios/header', $data);
			$this->load->view('pemilikkios/sidebar', $data);
			$this->load->view('pemilikkios/keterangan', $data);
			$this->load->view('pemilikkios/footer');
		}
		else
		{
			$email = $this->input->post('email');
			$keterangan = $this->input->post('keterangan');
			//gambar
			$fotoketerangan = $_FILES['fotoketerangan'];
				if ($fotoketerangan='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/fotoketerangan';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if ($this->upload->do_upload('fotoketerangan'))
	                {
	                	$old_image = $data['user']['fotoketerangan'];
			       		if ($old_image != '') {
			       			unlink(FCPATH . 'uploads/foto/fotoketerangan/'. $old_image);
			       		}
			       	        $new_image = $this->upload->data('file_name');
			       	        $this->db->set('fotoketerangan', $new_image);
	                }else{
	                	$fotoketerangan=$this->upload->data('file_name');
	                }
				}
			$this->db->set('keterangan', $keterangan);
			$this->db->where('email', $email);
			$this->db->update('pemilik');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('pemilikkios/dashboard');
		}
	}
}
