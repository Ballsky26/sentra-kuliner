<?php 
	
class Staff extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('email')){
       		redirect('auth');
	       }else if($this->session->userdata('role_id')!= 3){
	      redirect('auth/block');
	      }
	}
	public function index()
	{
		$data['judul'] = 'Staff';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['staff'] = $this->model_staff->tampil_data()->result();
		$this->load->view('superadmin/header', $data);
		$this->load->view('superadmin/sidebar', $data);
		$this->load->view('superadmin/staff', $data);
		$this->load->view('superadmin/footer');
	}
	public function detail_staff($id)
	{
		$data['judul'] = 'Detail Staff';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['staff'] = $this->model_staff->getstaffbyid($id);
		$this->load->view('superadmin/header', $data);
		$this->load->view('superadmin/sidebar', $data);
		$this->load->view('superadmin/detail_staff', $data);
		$this->load->view('superadmin/footer');
	}
	public function hapus($id)
	{
		$this->model_staff->hapus_staff($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('superadmin/staff');
	}
	public function edit($id)
	{
		$data['judul'] = 'Form Edit Staff';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['staff'] = $this->model_staff->getstaffbyid($id);
		$data['role_id'] = ['1','3'];
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric');		
		$this->form_validation->set_rules('role_id', 'Role', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telpon', 'Telpon', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('superadmin/header', $data);
		$this->load->view('superadmin/sidebar', $data);
		$this->load->view('superadmin/edit_staff', $data);
		$this->load->view('superadmin/footer');
		}
		else
		{
			$nik = $this->input->post('nik', true);			
			$role_id = $this->input->post('role_id', true);
			$nama = $this->input->post('nama', true);
			$telpon = $this->input->post('telpon', true);
			$email = $this->input->post('email', true);
			$tempat_lahir = $this->input->post('tempat_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$alamat = $this->input->post('alamat', true);
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
	                	$old_image = $data['staff']['foto'];
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
			$this->db->set('role_id', $role_id);
			$this->db->set('nama', $nama);
			$this->db->set('telpon', $telpon);
			$this->db->set('email', $email);
			$this->db->set('tempat_lahir', $tempat_lahir);
			$this->db->set('tgl_lahir', $tgl_lahir);
			$this->db->set('alamat', $alamat);
			$this->db->where('id', $id);
			$this->db->update('staff');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('superadmin/staff');
		}
	}
	public function tambah_data()
	{
		$data['judul'] = 'Form Tambah Pemilik';	
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[pemilik.nik]');
		$this->form_validation->set_rules('role_id', 'Role', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telpon', 'Telpon', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pendaftar.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password Tidak Sama',
			'min_length' => 'Password Terlalu Pendek'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('superadmin/header', $data);
			$this->load->view('superadmin/sidebar', $data);
			$this->load->view('superadmin/tambah_staff');
			$this->load->view('superadmin/footer');
		}
		else
		{
			$nik = $this->input->post('nik', true);
			$role_id = $this->input->post('role_id', true);
			$nama = $this->input->post('nama', true);
			$telpon = $this->input->post('telpon', true);
			$email = $this->input->post('email', true);
			$tempat_lahir = $this->input->post('tempat_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$alamat = $this->input->post('alamat', true);
			$foto = $_FILES['foto'];
				if ($foto='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/profil';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if (!$this->upload->do_upload('foto'))
	                {
						$foto = 'default.png';
	                }else{
	                	$foto=$this->upload->data('file_name');
	                }
				}

				$data = array(
					'nik' => $nik,
					'role_id' => $role_id,
					'nama' => $nama,
					'telpon' => $telpon,
					'email' => $email,
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'tempat_lahir' => $tempat_lahir,
					'tgl_lahir' => $tgl_lahir,
					'alamat' => $alamat,
					'date_created' => time(),
					'foto' => $foto,
				);
			$this->model_staff->tambah_staff($data, 'staff');
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('superadmin/staff');
		}
	}
}