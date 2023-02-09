<?php 
	
class Dashboard extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email')){
       		redirect('auth');
	       }else if($this->session->userdata('role_id')!= 1){
	      redirect('auth/block');
	      }
	}

	public function index()
	{
		$data['judul'] = 'Dashboard';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['dashboard'] = $this->model_kontak->tampil_data_dashboard()->result();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/footer');
	}
	public function edit($id)
	{
		$data['judul'] = ' Edit Dashboard';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['dashboard'] = $this->model_kontak->getdashboardbyid($id);
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		
		$this->form_validation->set_rules('dashboard', 'Dashboard', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('dashboard/edit_dashboard', $data);
		$this->load->view('dashboard/footer');
		}
		else
		{
			$this->model_kontak->edit_dashboard();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('dashboard');
		}
	}
	public function editprofil()
	{
		$data['judul'] = 'Edit Profil';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();

		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('dashboard/header', $data);
			$this->load->view('dashboard/sidebar', $data);
			$this->load->view('dashboard/edit_profil', $data);
			$this->load->view('dashboard/footer');
		}
		else
		{
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$alamat = $this->input->post('alamat');
			$telpon = $this->input->post('telpon');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tgl_lahir = $this->input->post('tgl_lahir');

			//gambar
			$upload_image = $_FILES['foto'];
			if ($upload_image) {
				$config['upload_path']          = './uploads/foto/profil/';
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
		       	}
		       	else
		       	{
		       	        echo $this->upload->display_errors();
		       	}
			}
			$this->db->set('nama', $nama);
			$this->db->set('alamat', $alamat);
			$this->db->set('telpon', $telpon);
			$this->db->set('tempat_lahir', $tempat_lahir);
			$this->db->set('tgl_lahir', $tgl_lahir);
			$this->db->where('email', $email);
			$this->db->update('staff');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('dashboard');
		}
	}
	public function edit_password()
	{
		$data['judul'] = 'Edit Password';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();

		$this->form_validation->set_rules('current_password', 'Password Lama', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Password Baru', 'required|trim|min_length[3]|matches[new_password2]',[
			'matches' => 'Password Tidak Sama'
		]);
		$this->form_validation->set_rules('new_password2', 'Ulangi Password Baru', 'required|trim|min_length[3]|matches[new_password1]',[
			'matches' => 'Password Tidak Sama'
		]);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('dashboard/header', $data);
			$this->load->view('dashboard/sidebar', $data);
			$this->load->view('dashboard/edit_password', $data);
			$this->load->view('dashboard/footer');
		}
		else
		{
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password Lama Salah</div>');
				redirect('dashboard/edit_password');
			}else{
				if ($current_password == $new_password) {
					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama dengan Password Lama</div>');
					redirect('dashboard/edit_password');
					}else{
						$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
						$this->db->set('password', $password_hash);
						$this->db->where('email', $this->session->userdata('email'));
						$this->db->update('staff');
						$this->session->set_flashdata('flash', 'Diubah');
						redirect('dashboard');
					}
				}
		}
	}
}
