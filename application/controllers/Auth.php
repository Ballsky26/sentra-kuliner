<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userdata('role_id') == 1) {
			redirect('dashboard');
		}else if ($this->session->userdata('role_id') == 2) {
			redirect('user/dashboard');
		}elseif ($this->session->userdata('role_id') == 3) {
			redirect('superadmin/dashboard');
		}elseif ($this->session->userdata('role_id') == 5) {
			redirect('pemilikkios/dashboard');
		}
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');			
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('staff', ['email' => $email])->row_array();
		$userpemilik = $this->db->get_where('pemilik', ['email' => $email])->row_array();
		$userpendaftar = $this->db->get_where('pendaftar', ['email' => $email])->row_array();

		?>
		<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
		<style>
		body{
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.124em;
			font-weight: normal;
		}
		</style>
		<body></body>
		<?php
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id'],
				];
				$this->session->set_userdata($data);
				if ($user['role_id'] == 1) {
					?>
					<script>
						Swal.fire({
						  icon: 'success',
						  title: 'Berhasil Login',
						  text: 'Selamat Datang Administrator',
						  showConfirmButton: false,
						  timer: 1500
						}).then((result) => {
								window.location = '<?=site_url('dashboard')?>';
						})
					</script>
					<?php
				}else{
					$this->session->set_userdata($data);
					if ($user['role_id'] == 3) {
					?>
					<script>
						Swal.fire({
						  icon: 'success',
						  title: 'Berhasil Login',
						  text: 'Selamat Datang Ketua',
						  showConfirmButton: false,
						  timer: 1500
						}).then((result) => {
								window.location = '<?=site_url('superadmin/dashboard')?>';
						})
					</script>
					<?php
					}
				}
			}else{
				?>
				<script>
					Swal.fire({
						  icon: 'error',
						  title: 'Login Gagal',
						  text: 'Password Salah'
						}).then((result) => {
							window.location = '<?=site_url('auth')?>';
					})
				</script>
				<?php
			}
		}else if ($userpemilik) {
			if (password_verify($password, $userpemilik['password'])) {
				$data = [
					'email' => $userpemilik['email'],
					'role_id' => $userpemilik['role_id'],
				];
				$this->session->set_userdata($data);
				if ($userpemilik['role_id'] == 5) {
					?>
					<script>
						Swal.fire({
						  icon: 'success',
						  title: 'Berhasil Login',
						  text: 'Selamat Datang Pemilik Kios',
						  showConfirmButton: false,
						  timer: 1500
						}).then((result) => {
								window.location = '<?=site_url('pemilikkios/dashboard')?>';
						})
					</script>
					<?php
				}
			}else{
				?>
				<script>
					Swal.fire({
						  icon: 'error',
						  title: 'Login Gagal',
						  text: 'Password Salah'
						}).then((result) => {
							window.location = '<?=site_url('auth')?>';
					})
				</script>
				<?php
			}
		}else if ($userpendaftar) {
			if ($userpendaftar['is_active'] == 1) {
				if (password_verify($password, $userpendaftar['password'])) {
					$data = [
						'email' => $userpendaftar['email'],
						'role_id' => $userpendaftar['role_id'],
					];
					$this->session->set_userdata($data);
					if ($userpendaftar['role_id'] == 2) {
						?>
						<script>
							Swal.fire({
							  icon: 'success',
							  title: 'Berhasil Login',
							  text: 'Selamat Datang Calon Pemilik Kios',
							  showConfirmButton: false,
							  timer: 1500
							}).then((result) => {
									window.location = '<?=site_url('user/dashboard')?>';
							})
						</script>
						<?php
					}
				}else{
					?>
					<script>
						Swal.fire({
							  icon: 'error',
							  title: 'Login Gagal',
							  text: 'Password Salah'
							}).then((result) => {
								window.location = '<?=site_url('auth')?>';
						})
					</script>
					<?php
				}
			}else{
				?>
				<script>
					Swal.fire({
						  icon: 'error',
						  title: 'Login Gagal',
						  text: 'Akun Belum Aktivasi'
						}).then((result) => {
							window.location = '<?=site_url('auth')?>';
					})
				</script>
				<?php
			}
		}else{
			?>
			<script>
				Swal.fire({
					  icon: 'error',
					  title: 'Login Gagal',
					  text: 'Akun Tidak Terdaftar'
					}).then((result) => {
						window.location = '<?=site_url('auth')?>';
				})
			</script>
			<?php
		}
	}
	public function registrasi()
	{
		?>
		<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
		<style>
		body{
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.124em;
			font-weight: normal;
		}
		</style>
		<body></body>
		<?php
		if ($this->session->userdata('email')) {
			redirect('auth');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[staff.email]|is_unique[pemilik.email]|is_unique[pendaftar.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password Tidak Sama',
			'min_length' => 'Password Terlalu Pendek'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) 
		{
			$data['judul'] = 'Registrasi Akun Baru';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registrasi');
			$this->load->view('templates/auth_footer');		
		} else{
			$email = $this->input->post('email', true);
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'fotoprofil' => 'default.png',
				'status' => 'proses',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'tgldaftar' => time(),
			];

			//token
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time(),
			];

			$this->db->insert('pendaftar', $data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');

			?>
			<script>
				Swal.fire({
				  icon: 'success',
				  title: 'Berhasil Membuat Akun',
				  text: 'Silahkan Cek Email Anda Untuk Aktivasi Akun'
				}).then((result) => {
						window.location = '<?=site_url('auth')?>';
				})
			</script>
			<?php
		}
	}
	public function logout()
	{
		?>
		<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
		<style>
		body{
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.124em;
			font-weight: normal;
		}
		</style>
		<body></body>
		<?php
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		?>
		<script>
			Swal.fire({
			  icon: 'success',
			  title: 'Berhasil Logout',
			  showConfirmButton: false,
			  timer: 1500
			}).then((result) => {
					window.location = '<?=site_url('auth')?>';
			})
		</script>
		<?php
	}
	public function block()
	{
		$this->load->view('auth/blocked');
	}
	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'daniswara428@gmail.com',
			'smtp_pass' => 'slgulojhfllogkwy',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('daniswara428@gmail.com', 'Technopark Kota Pekalongan');
		$this->email->to($this->input->post('email'));
		if ($type == 'verify') {
			$this->email->subject('Aktivasi Akun Calon Pemilik Kios');
			$this->email->message('Halo Calon Pemilik Kios, Klik Link Berikut Untuk Meng-Aktivasi Akun Anda : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a>');	
		}else if($type == 'forgot'){
			$this->email->subject('Reset Password');
			$this->email->message('Halo, Silahkan Klik Link Berikut Ini Untuk Me-reset Password Anda : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset</a>');	
		}
		if ($this->email->send()) {
			return true;
		}else{
			echo $this->email->print_debugger();
			die;
		}

	}
	public function verify()
	{
		?>
		<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
		<style>
		body{
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.124em;
			font-weight: normal;
		}
		</style>
		<body></body>
		<?php
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('pendaftar', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if (time() - $user_token['date_created'] < (60*60*24)) {

					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('pendaftar');

					$this->db->delete('user_token', ['email' => $email]);
					?>
					<script>
						Swal.fire({
						  icon: 'success',
						  title: 'Berhasil Aktivasi Akun',
						  text: 'Silahkan Login'
						}).then((result) => {
								window.location = '<?=site_url('auth')?>';
						})
					</script>
					<?php
				}else{
					$this->db->delete('pendaftar', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Aktivasi Akun Gagal! Verifikasi Kadaluarsa</div>');
					redirect('login');
				}
			}else{
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Aktivasi Akun Gagal! Salah Token</div>');
				redirect('login');
			}
		}else{
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Aktivasi Akun Gagal! Salah Email</div>');
			redirect('login');
		}
	}
	public function forgotpassword()
	{
		?>
		<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
		<style>
		body{
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.124em;
			font-weight: normal;
		}
		</style>
		<body></body>
		<?php
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Lupa Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/lupapass');
			$this->load->view('templates/auth_footer');		
		}else{
			$email = $this->input->post('email');
			$user = $this->db->get_where('staff', ['email' => $email])->row_array();
			$userpemilik = $this->db->get_where('pemilik', ['email' => $email])->row_array();
			$userpendaftar = $this->db->get_where('pendaftar', ['email' => $email])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');
					?>
					<script>
						Swal.fire({
						  icon: 'success',
						  title: 'Berhasil Mengirim Email',
						  text: 'Silahkan Cek Email Anda Untuk Reset Password'
						}).then((result) => {
								window.location = '<?=site_url('auth/forgotpassword')?>';
						})
					</script>
					<?php
			}else if($userpemilik){
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');
					?>
					<script>
						Swal.fire({
						  icon: 'success',
						  title: 'Berhasil Mengirim Email',
						  text: 'Silahkan Cek Email Anda Untuk Reset Password'
						}).then((result) => {
								window.location = '<?=site_url('auth/forgotpassword')?>';
						})
					</script>
					<?php
			}else if($userpendaftar){
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');
					?>
					<script>
						Swal.fire({
						  icon: 'success',
						  title: 'Berhasil Mengirim Email',
						  text: 'Silahkan Cek Email Anda Untuk Reset Password'
						}).then((result) => {
								window.location = '<?=site_url('auth/forgotpassword')?>';
						})
					</script>
					<?php
			}else{
				?>
				<script>
					Swal.fire({
						  icon: 'error',
						  title: 'Gagal Kirim Email',
						  text: 'Akun Tidak Terdaftar'
						}).then((result) => {
							window.location = '<?=site_url('auth/forgotpassword')?>';
					})
				</script>
				<?php
			}
		}
	}
	public function resetpassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('staff', ['email' => $email])->row_array();
		$userpemilik = $this->db->get_where('pemilik', ['email' => $email])->row_array();
		$userpendaftar = $this->db->get_where('pendaftar', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->gantipassword();
			}else{
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Aktivasi Akun Gagal! Salah Token</div>');
				redirect('auth/forgotpassword');
			}
		}else if($userpemilik){
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->gantipassword();
			}
		}else if($userpendaftar){
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->gantipassword();
			}
		}else{
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Reset Password Gagal, Salah Email</div>');
			redirect('auth/forgotpassword');
		}
	}
	public function gantipassword()
	{
		?>
		<script src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
		<style>
		body{
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 1.124em;
			font-weight: normal;
		}
		</style>
		<body></body>
		<?php
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Ulangi Password', 'required|trim|min_length[3]|matches[password1]');
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Ganti Password';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/gantipass');
			$this->load->view('templates/auth_footer');			
		}else{
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('staff');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('pemilik');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('pendaftar');

			$this->db->delete('user_token', ['email' => $email]);
			$this->session->unset_userdata('reset_email');

			?>
			<script>
				Swal.fire({
				  icon: 'success',
				  title: 'Berhasil Reset Password',
				  text: 'Silahkan Login!'
				}).then((result) => {
						window.location = '<?=site_url('auth')?>';
				})
			</script>
			<?php
		}
	}
}