<?php 
	
class Pesan extends CI_Controller{
	
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
		$data['judul'] = 'Pesan';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('pesan/pesan', $data);
		$this->load->view('dashboard/footer');
	}
	//pesan
	public function hapus($id)
	{
		$this->model_kontak->hapus_pesan($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('pesan');
	}
	public function detail_pesan($id)
	{
		$data['judul'] = 'Detail pesan';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['dpesan'] = $this->model_kontak->getpesanbyid($id);
		$data['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar');
		$this->load->view('pesan/detail_pesan', $data);
		$this->load->view('dashboard/footer');
	}
	
}