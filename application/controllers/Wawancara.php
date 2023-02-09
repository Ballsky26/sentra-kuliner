<?php 
	
class Wawancara extends CI_Controller{
	
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
		$data['judul'] = 'Wawancara';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['wawancara'] = $this->model_pendaftar->tampil_wawancara()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('wawancara/wawancara');
		$this->load->view('dashboard/footer');
	}
	public function hapus($id)
	{
		$this->model_pendaftar->hapus_wawancara($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('wawancara');
	}
	public function validasi($id)
	{
		$data['judul'] = 'Validasi Pendaftar';	
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['kios'] = $this->model_pemilik->tampil_kios()->result();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->getwawancarabyid($id);
		$pendaftar['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[pemilik.nik]');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telpon', 'Telpon', 'required|numeric');
		$this->form_validation->set_rules('namakios', 'Nama Kios', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('nokios', 'Nomor Kios', 'required|numeric|is_unique[pemilik.nokios]', [
			'is_unique' => 'Nomor Kios Ini Sudah Ada Pemilik-nya'
		]);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('dashboard/header', $data);
			$this->load->view('dashboard/sidebar', $pendaftar);
			$this->load->view('wawancara/validasi_pendaftar', $data);
			$this->load->view('dashboard/footer');
		}
		else
		{
			$nik = $this->input->post('nik', true);
			$nama = $this->input->post('nama', true);
			$telpon = $this->input->post('telpon', true);
			$email = $this->input->post('email', true);
			$password = $this->input->post('password', true);
			$npwp = $this->input->post('npwp', true);
			$slogan = $this->input->post('slogan', true);
			$namakios = $this->input->post('namakios', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$alamat = $this->input->post('alamat', true);
			$nokios = $this->input->post('nokios');
			$foto = $this->input->post('foto');
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
					'slogan' => $slogan,
					'namakios' => $namakios,
					'tgl_lahir' => $tgl_lahir,
					'alamat' => $alamat,
					'nokios' => $nokios,
					'foto' => $foto,
					'fotoktp' => $fotoktp,
					'fotokk' => $fotokk,
				);
			$this->model_pendaftar->tambah_wawancara($data, 'pemilik');
			// $this->model_pendaftar->hapus_pendaftar($id);
			$this->model_pendaftar->hapus_wawancara($id);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('pemilik');
		}
	}
}