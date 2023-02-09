<?php 
	
class Berita extends CI_Controller{
	
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
		$data ['judul'] = 'Berita';
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['berita'] = $this->model_berita->tampil_data()->result();
		$data ['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data ['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('berita/berita');
		$this->load->view('dashboard/footer');
	}
	public function tambah_data()
	{
		$data['judul'] = 'Form Tambah Berita';	
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data ['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data ['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isiberita', 'Isi Berita', 'required');
		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('berita/tambah_berita');
		$this->load->view('dashboard/footer');
		}
		else
		{
			$judul = $this->input->post('judul', true);
			$kategori = $this->input->post('kategori', true);
			$isiberita = $this->input->post('isiberita', true);
			$gambar = $_FILES['gambar'];
				if ($gambar='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/berita';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if (!$this->upload->do_upload('gambar'))
	                {
	                	echo $this->upload->display_errors();
						die();
	                }else{
	                	$gambar=$this->upload->data('file_name');
	                }
				}

				$data = array(
					'judul' => $judul,
					'kategori' => $kategori,
					'tglterbit' => time(),
					'isiberita' => $isiberita,
					'gambar' => $gambar,
				);
			$this->model_berita->tambah_berita($data, 'berita');
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('berita');
		}
	}
	public function detail_berita($id)
	{
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data ['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data ['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		$data['judul'] = 'Detail Berita';
		$data['berita'] = $this->model_berita->getberitabyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('berita/detail_berita', $data);
		$this->load->view('dashboard/footer');
	}
	
	public function hapus($id)
	{
		
		$gambar = $this->model_berita->getberitabyid($id);
		$nama = './uploads/foto/kk/'.$gambar['gambar'];

		if (is_readable($nama) && unlink($nama)){
			$this->model_berita->hapus_berita($id);
			$this->session->set_flashdata('flash', 'Dihapus');
			redirect('berita');
		}else{
			echo "Gagal Hapus";
		}
	}

	public function edit($id)
	{
		$data['user'] = $this->db->get_where('staff', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Form Edit Berita';
		$data['berita'] = $this->model_berita->getberitabyid($id);
		$data['kategori'] = ['Pengumuman','Berita'];
		$data ['pesan'] = $this->model_kontak->tampil_pesan()->result();
		$data ['pendaftar'] = $this->model_pendaftar->tampil_data()->result();
		
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isiberita', 'Isi Berita', 'required');
		if($this->form_validation->run() == FALSE)
		{
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('berita/edit_berita', $data);
		$this->load->view('dashboard/footer');
		}
		else
		{	
			$judul = $this->input->post('judul', true);
			$kategori = $this->input->post('kategori', true);
			$isiberita = $this->input->post('isiberita', true);
			$gambar = $_FILES['gambar'];
				if ($gambar='') {
					
				}else{
					$config['upload_path']          = './uploads/foto/berita';
	                $config['allowed_types']        = 'gif|jpg|png|jpeg';
	                $config['max_size']             = 2048;

	                $this->load->library('upload');
					$this->upload->initialize($config);

	                if ($this->upload->do_upload('gambar'))
	                {
	                	$old_image = $data['berita']['gambar'];
			       		if ($old_image != 'berita.jpeg') {
			       			unlink(FCPATH . 'uploads/foto/berita/'. $old_image);
			       		}
			       	        $new_image = $this->upload->data('file_name');
			       	        $this->db->set('gambar', $new_image);
	                }else{
	                	$gambar=$this->upload->data('file_name');
	                }
				}
			$this->db->set('judul', $judul);
			$this->db->set('kategori', $kategori);
			$this->db->set('tglterbit', time());
			$this->db->set('isiberita', $isiberita);
			$this->db->where('id', $id);
			$this->db->update('berita');
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('berita');
		}
	}
	
}

?>