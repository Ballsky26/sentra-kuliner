<?php 
	
class Kios extends CI_Controller{
	
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
		$data['judul'] = 'Kelola Kios';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['kios'] = $this->model_pemilik->tampil_kios()->result();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('kios/kios');
		$this->load->view('dashboard/footer');
	}
	public function tambah_data()
	{
		$data['judul'] = 'Form Tambah Kios';	
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->form_validation->set_rules('nokios', 'Kios', 'required|numeric|is_unique[kios.nokios]');
		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('kios/tambah_kios');
		$this->load->view('dashboard/footer');
		}
		else
		{
			$nokios = $this->input->post('nokios', true);

				$data = array(
					'nokios' => $nokios,
				);
			$this->model_pemilik->tambah_kios($data, 'kios');
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('kios');
		}
	}
	public function edit($id)
	{
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Form Edit Kios';
		$data['kios'] = $this->model_pemilik->getkiosbyid($id);
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		
		$this->form_validation->set_rules('nokios', 'Kios', 'required|numeric|is_unique[kios.nokios]');
		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('kios/edit_kios', $data);
		$this->load->view('dashboard/footer');
		}
		else
		{	
			$nokios = $this->input->post('nokios', true);
			
			$this->db->set('nokios', $nokios);
			$this->db->where('id', $id);
			$this->db->update('kios');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('kios');
		}
	}
	public function hapus($id)
	{
		$this->model_pemilik->hapus_kios($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('kios');
	}
}