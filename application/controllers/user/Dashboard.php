<?php

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email')){
       		redirect('auth');
	       }else if($this->session->userdata('role_id')!= 2){
	      redirect('auth/block');
	      }
	}
	public function index()
	{
		$data['judul'] = 'Dashboard Calon Pemilik';
		$data['user'] = $this->db->get_where('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->load->view('user/header', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/dashboard', $data);
		$this->load->view('user/footer');
	}
	public function edit()
	{
		$data['judul'] = 'Edit Profil';
		$data['user'] = $this->db->get_where('pendaftar', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[pemilik.nik]|callback_cekpendaftar');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');		
		$this->form_validation->set_rules('tgllahir', 'Tanggal Lahir', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/header', $data);
			$this->load->view('user/sidebar', $data);
			$this->load->view('user/edit_profil', $data);
			$this->load->view('user/footer');
		}
		else
		{
			$nik = $this->input->post('nik');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$npwp = $this->input->post('npwp');
			$telpon = $this->input->post('telpon');
			$tempatlahir = $this->input->post('tempatlahir');
			$tgllahir = $this->input->post('tgllahir');
			//gambar
			$fotoktp = $_FILES['fotoktp'];
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
			$fotokk = $_FILES['fotokk'];
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
			$fotoprofil = $_FILES['fotoprofil'];
				$config['upload_path']          = './uploads/foto/profil';
	        	$config['allowed_types']        = 'gif|jpg|png|jpeg';
	        	$config['max_size']             = 2048;

	        	$this->load->library('upload');
				$this->upload->initialize($config);

	        	if ($this->upload->do_upload('fotoprofil'))
	        	{
	        		$old_image = $data['user']['fotoprofil'];
					if ($old_image != 'default.png') {
						unlink(FCPATH . 'uploads/foto/profil/'. $old_image);
					}
				        $new_image = $this->upload->data('file_name');
				        $this->db->set('fotoprofil', $new_image);
	        	}else{
	        		$fotoprofil=$this->upload->data('file_name');
	        	}
			$this->db->set('nik', $nik);
			$this->db->set('nama', $nama);
			$this->db->set('alamat', $alamat);
			$this->db->set('npwp', $npwp);
			$this->db->set('telpon', $telpon);
			$this->db->set('tempatlahir', $tempatlahir);
			$this->db->set('tgllahir', $tgllahir);
			$this->db->where('email', $email);
			$this->db->update('pendaftar');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('user/dashboard');
		}
	}
	public function edit_password()
	{
		$data['judul'] = 'Edit Password';
		$data['user'] = $this->db->get_where('pendaftar', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('current_password', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[3]|matches[new_password1]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('user/header', $data);
			$this->load->view('user/sidebar', $data);
			$this->load->view('user/edit_password', $data);
			$this->load->view('user/footer');
		}
		else
		{
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Salah Password Lama</div>');
				redirect('user/dashboard/edit_password');
			}else{
				if ($current_password == $new_password) {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama dengan Password Lama</div>');
					redirect('user/dashboard/edit_password');
					}else{
						$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
						$this->db->set('password', $password_hash);
						$this->db->where('email', $this->session->userdata('email'));
						$this->db->update('pendaftar');
						$this->session->set_flashdata('flash', 'Diubah');
						redirect('user/dashboard');
					}
				}
		}
	}
	function cekpendaftar($nik) {        
	    if($this->input->post('id'))
	        $id = $this->input->post('id');
	    else
	        $id = '';
	    $result = $this->model_pendaftar->cek_pendaftar($id, $nik);
	    if($result == 0)
	        $response = true;
	    else {
	        $this->form_validation->set_message('cekpendaftar', 'NIK Sudah Terdaftar');
	        $response = false;
	    }
	    return $response;
	}
}
