<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function register_user()
	{
		$this->load->library('form_validation');

		//set aturan validasi
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('lengkap', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');

		if ($this->form_validation->run() == FALSE) {
			// jika validasi gagal, kembali ke halaman registrasi
			$this->load->view('template/head');
			$this->load->view('register');
		} else {
			// jika validasi berhasil, simpan data ke database
			$data = array(
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'namalengkap' => $this->input->post('lengkap'),
				'level' => $this->input->post('level')
			);

			$this->UserModel->register($data);

			//tampilkan pesan sukses atau redirect ke halaman lain 
			// echo "registrasi berhasil";

			$this->load->view('template/head');
			
			$this->load->view('index');

			}
		}

		public function authenticate()
		{
			$this->load->library('form_validation');

			//set aturan validasi
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE) {
				// jika validasi gagal, kembali ke halaman login
				//$this->load->view('login_form');
				$this->load->view('template/head');
				$this->load->view('errors/loginerror');	
			}else{
				//jika validasi berhasil , cek autentikasi
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$user = $this->UserModel->get_user($username);

				if ($user && password_verify($password, $user['password'])) {
					// autentikasi berhasil, set session dan redirectke halaman lain
					//$this->session->set_userdata('userid', $user['UserID']);
					$this->session->set_userdata('logged_in', TRUE);
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('userid', $user['userID']);
					
        				
        			$userID = $this->session->userdata('userid');
        			$data['user'] = $this->UserModel->getlevelbyid($userID);

					$this->load->view('template/head');
					$this->load->view('template/sidebar', $data);
					$this->load->view('template/rightbar');
					$this->load->view('template/topbar');
					$this->load->view('halamanutama');		 


				}else{
				//autentikasi gagal, tampilkan pesan error
				$this->load->view('template/head');
				$this->load->view('errors/loginerror');
			}
			
				
		}
	}



		public function logout()
		{
			//hapus data login dari session
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('username');
			redirect('Page');
		}
}                                                                                                                                                       

