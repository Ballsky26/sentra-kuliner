<?php 
	
class Pemilik extends CI_Controller{
	
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

		$data['judul'] = 'Pemilik Kios';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pemilik'] = $this->model_pemilik->tampil_data()->result();
		$data ['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data ['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('pemilik/pemilik', $data);
		$this->load->view('dashboard/footer');
	}
	public function tambah_data()
	{
		$data['judul'] = 'Form Tambah Pemilik';	
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['kios'] = $this->model_pemilik->tampil_kios()->result();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[pemilik.nik]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telpon', 'Telpon', 'required');
		$this->form_validation->set_rules('npwp', 'NPWP', 'is_unique[pemilik.npwp]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('namakios', 'Nama Kios', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nokios', 'Nomor Kios', 'required|is_unique[pemilik.nokios]', [
			'is_unique' => 'Nomor Kios Ini Sudah Ada Pemilik-nya']);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password Tidak Sama',
			'min_length' => 'Password Terlalu Pendek'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if (empty($_FILES['fotoktp']['name']))
		{
		    $this->form_validation->set_rules('fotoktp', 'Foto KTP', 'required');
		}
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('dashboard/header', $data);
			$this->load->view('dashboard/sidebar', $data);
			$this->load->view('pemilik/tambah_pemilik');
			$this->load->view('dashboard/footer');
		}
		else
		{
			$nik = $this->input->post('nik', true);
			$nama = $this->input->post('nama', true);
			$telpon = $this->input->post('telpon', true);
			$npwp = $this->input->post('npwp', true);
			$email = $this->input->post('email', true);
			$slogan = $this->input->post('slogan', true);
			$namakios = $this->input->post('namakios', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$alamat = $this->input->post('alamat', true);
			$nokios = $this->input->post('nokios');
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
			$fotoktp = $_FILES['fotoktp'];
				if ($fotoktp='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/ktp';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if (!$this->upload->do_upload('fotoktp'))
	                {
	                	echo $this->upload->display_errors();
						die();
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

	                if (!$this->upload->do_upload('fotokk'))
	                {
	                	
	                }else{
	                	$fotokk=$this->upload->data('file_name');
	                }
				}

				$data = array(
					'nik' => $nik,
					'nama' => $nama,
					'telpon' => $telpon,
					'npwp' => $npwp,
					'email' => $email,
					'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
					'role_id' => '5',
					'slogan' => $slogan,
					'namakios' => $namakios,
					'tgl_lahir' => $tgl_lahir,
					'alamat' => $alamat,
					'nokios' => $nokios,
					'foto' => $foto,
					'fotoktp' => $fotoktp,
					'fotokk' => $fotokk,
				);

			$this->model_pemilik->tambah_pemilik($data, 'pemilik');
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('pemilik');
		}
	}
	public function detail_pemilik($id)
	{
		$data ['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data ['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$data['judul'] = 'Detail Pemilik';
		$data['pemilik'] = $this->model_pemilik->getpemilikbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('pemilik/detail_pemilik', $data);
		$this->load->view('dashboard/footer');
	}
	
	public function hapus($id)
	{
		// $gambar = $this->model_pemilik->getpemilikbyid($id);
		// $nama = './uploads/foto/profil/'.$gambar['foto'];
		// $namakk = './uploads/foto/kk/'.$gambar['fotokk'];
		// $namaktp = './uploads/foto/ktp/'.$gambar['fotoktp'];

		// if (is_readable($nama) && unlink($namaktp)){
		// 	// $this->model_pemilik->hapus_pemilik($id);
		// 	$this->session->set_flashdata('flash', 'Dihapus');
		// 	redirect('pemilik');
		// }else{
		// 	echo "Gagal Hapus";
		// }

		$this->model_pemilik->hapus_pemilik($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('pemilik');
	}

	public function edit($id)
	{
		$data['judul'] = 'Form Edit Pemilik';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['kios'] = $this->model_pemilik->tampil_kios()->result_array();
		$data['pemilik'] = $this->model_pemilik->getpemilikbyid($id);
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();

		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telpon', 'Telpon', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('namakios', 'Nama Kios', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nokios', 'nokios', 'required|callback_check_nokios');

		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('pemilik/edit_pemilik', $data);
		$this->load->view('dashboard/footer');
		}
		else
		{
			$nik = $this->input->post('nik', true);
			$nama = $this->input->post('nama', true);
			$telpon = $this->input->post('telpon', true);
			$npwp = $this->input->post('npwp', true);
			$email = $this->input->post('email', true);
			$slogan = $this->input->post('slogan', true);
			$namakios = $this->input->post('namakios', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$alamat = $this->input->post('alamat', true);			
			$pendapatan = $this->input->post('pendapatan', true);
			$nokios = $this->input->post('nokios', true);			
			$keterangan = $this->input->post('keterangan', true);
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
	                	$old_image = $data['pemilik']['fotoktp'];
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
	                	$old_image = $data['pemilik']['fotokk'];
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
	                	$old_image = $data['pemilik']['foto'];
			       		if ($old_image != 'default.png') {
			       			unlink(FCPATH . 'uploads/foto/profil/'. $old_image);
			       		}
			       	        $new_image = $this->upload->data('file_name');
			       	        $this->db->set('foto', $new_image);
	                }else{
	                	$foto=$this->upload->data('file_name');
	                }
				}
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
			$this->db->set('nik', $nik);
			$this->db->set('nama', $nama);
			$this->db->set('telpon', $telpon);
			$this->db->set('npwp', $npwp);
			$this->db->set('email', $email);
			$this->db->set('slogan', $slogan);
			$this->db->set('namakios', $namakios);
			$this->db->set('tgl_lahir', $tgl_lahir);
			$this->db->set('alamat', $alamat);			
			$this->db->set('pendapatan', $pendapatan);
			$this->db->set('nokios', $nokios);			
			$this->db->set('keterangan', $keterangan);
			$this->db->where('id', $id);
			$this->db->update('pemilik');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('pemilik');
		}
	}

	function check_nokios($nokios) {        
	    if($this->input->post('id'))
	        $id = $this->input->post('id');
	    else
	        $id = '';
	    $result = $this->model_pemilik->check_nokios($id, $nokios);
	    if($result == 0)
	        $response = true;
	    else {
	        $this->form_validation->set_message('check_nokios', 'No Kios Ini Sudah Ada Pemilik-nya');
	        $response = false;
	    }
	    return $response;
	}
}