<?php 
	
class Pendaftar extends CI_Controller{
	
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
		$data['judul'] = 'Pendaftar';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$data ['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('pendaftar/pendaftar');
		$this->load->view('dashboard/footer');
	}
	public function hapus($id)
	{
		// $gambar = $this->model_pendaftar->getpendaftarbyid($id);
		// $nama = './uploads/foto/profil/'.$gambar['fotoprofil'];
		// $namakk = './uploads/foto/kk/'.$gambar['fotokk'];
		// $namaktp = './uploads/foto/ktp/'.$gambar['fotoktp'];
		// if (is_readable($nama) && unlink($namaktp)){
		// 	$this->model_pemilik->hapus_pemilik($id);
		// 	$this->session->set_flashdata('flash', 'Dihapus');
		// 	redirect('pendaftar');
		// }else{
		// 	echo "Gagal Hapus";
		// }

		$this->model_pendaftar->hapus_pendaftar($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('pendaftar');
	}
	public function pengajuan($id)
	{
		$data['judul'] = 'Pengajuan Pendaftar';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->getpendaftarbyid($id);
		$data['status'] = ['proses','Pengajuan Ditolak','Pengajuan Diterima'];
		$pendaftar['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('dashboard/header', $data);
			$this->load->view('dashboard/sidebar', $pendaftar);
			$this->load->view('pendaftar/edit_pendaftar', $data);
			$this->load->view('dashboard/footer');
		}
		else
		{
			$email = $this->input->post('email');
			$status = $this->input->post('status');
			//gambar
			$this->db->set('status', $status);
			$this->db->where('email', $email);
			$this->db->update('pendaftar');
			if ($status == 'Pengajuan Diterima'){
				$nik = $this->input->post('nik', true);
				$nama = $this->input->post('nama', true);
				$telpon = $this->input->post('telpon', true);
				$email = $this->input->post('email', true);
				$password = $this->input->post('password', true);
				$npwp = $this->input->post('npwp', true);
				$tgllahir = $this->input->post('tgllahir', true);
				$alamat = $this->input->post('alamat', true);
				$fotoprofil = $this->input->post('fotoprofil');
				$fotoktp = $this->input->post('fotoktp');
				$fotokk = $this->input->post('fotokk');

					$data = array(
						'nik' => $nik,
						'nama' => $nama,
						'telpon' => $telpon,
						'email' => $email,
						'password' => $password,
						'role_id' => '5',
						'npwp' => $npwp,
						'tgllahir' => $tgllahir,
						'is_active' => 1,
						'alamat' => $alamat,
						'fotoprofil' => $fotoprofil,
						'fotoktp' => $fotoktp,
						'fotokk' => $fotokk,
					);
				$this->model_pendaftar->tambah_wawancara($data, 'wawancara');
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('wawancara');
			}
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('pendaftar');
		}
	}
}