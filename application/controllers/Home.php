<?php

class Home extends CI_Controller {

	public function index()
	{
		$data['staff'] = $this->model_staff->tampil_data()->result();
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$data['pemilik'] = $this->model_pemilik->tampil_data()->result();

		// $data['kontak'] = $this->model_kontak->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
	public function baca($id)
	{
		$data['judul'] = 'Baca Berita';
		$data['berita'] = $this->model_berita->getberitabyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('home/berita', $data);
		$this->load->view('dashboard/footer');
	}
	public function kirim_pesan()
	{
		$email = $this->input->post('email');
		$nama = $this->input->post('nama');
		$subjek = $this->input->post('subjek');
		$isipesan = $this->input->post('isipesan');

		$data = array(
			'email' => $email,
			'nama' => $nama,
			'subjek' => $subjek,
			'isipesan' => $isipesan,
			'date_sent' => time()
		);
		$this->model_kontak->kirim_pesan($data, 'pesan');
		$this->session->set_flashdata('flashhome', 'dikirim');
		redirect('home');
	}
	public function detail_pemilik($id)
	{
		$data['judul'] = 'Detail Pemilik';
		$data['pemilik'] = $this->model_pemilik->getpemilikbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('home/detail_pemilik', $data);
		$this->load->view('dashboard/footer');
	}
}
