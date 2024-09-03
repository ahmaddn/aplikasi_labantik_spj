<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('UserModel');

	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('index');

	}

	public function register()
	{
		$this->load->view('template/head');
		$this->load->view('register');

	}

	public function utama()
	{
		$userID = $this->session->userdata('userid');
        $data['user'] = $this->UserModel->getlevelbyid($userID);

        $this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/rightbar');
		$this->load->view('template/topbar');
		$this->load->view('halamanutama');

	}

	}
