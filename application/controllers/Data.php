<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('BendaharaModel');
		$this->load->model('BarangModel');
		$this->load->model('KegiatanModel');
		$this->load->model('KepsekModel');
		$this->load->model('PenerimaModel');
		$this->load->model('PenyediaModel');
		$this->load->model('PesananModel');
		$this->load->model('UserModel');

	}


	public function databendahara()
	{

        
		$data['bendahara'] = $this->BendaharaModel->getallbendahara();
	
		$userID = $this->session->userdata('userid');
        $data['user'] = $this->UserModel->getlevelbyid($userID);

		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/rightbar');
		$this->load->view('template/topbar');
		$this->load->view('datamaster/databendahara', $data);

	}

	public function datakepsek()
	{

		$data['kepsek'] = $this->KepsekModel->getallkepsek();
		$userID = $this->session->userdata('userid');
        $data['user'] = $this->UserModel->getlevelbyid($userID);

		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/rightbar');
		$this->load->view('template/topbar');
		$this->load->view('datamaster/datakepsek', $data);

	


	}
	public function datapenerima()
	{

		$data['penerima'] = $this->PenerimaModel->getallpenerima();
		$userID = $this->session->userdata('userid');
        			$data['user'] = $this->UserModel->getlevelbyid($userID);

					$this->load->view('template/head');
					$this->load->view('template/sidebar', $data);
					$this->load->view('template/rightbar');
					$this->load->view('template/topbar');	
		$this->load->view('datamaster/datapenerima', $data);

	}


	public function datakegiatan()
	{

		$data['kegiatan'] = $this->KegiatanModel->getallkegiatan();
		$userID = $this->session->userdata('userid');
        $data['user'] = $this->UserModel->getlevelbyid($userID);

		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/rightbar');
		$this->load->view('template/topbar');
		$this->load->view('datamaster/datakegiatan', $data);

	}

	public function databarang()
	{

		$data['barang'] = $this->BarangModel->getallbarang();
		$userID = $this->session->userdata('userid');
        $data['user'] = $this->UserModel->getlevelbyid($userID);

		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/rightbar');
		$this->load->view('template/topbar');
		$this->load->view('datamaster/databarang', $data);
		

	}

	public function datapesanan()
	{

		$data['pesanan'] = $this->PesananModel->getallpesanan();
		$userID = $this->session->userdata('userid');
        $data['user'] = $this->UserModel->getlevelbyid($userID);

		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/rightbar');
		$this->load->view('template/topbar');
		$this->load->view('datamaster/datapesanan', $data);
		

	}

	public function datapenyedia()
	{

		$data['penyedia'] = $this->PenyediaModel->getallpenyedia();
		$userID = $this->session->userdata('userid');
        $data['user'] = $this->UserModel->getlevelbyid($userID);

		$this->load->view('template/head');
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/rightbar');
		$this->load->view('template/topbar');
		$this->load->view('template/rightbar');
		
		$this->load->view('datamaster/datapenyedia', $data);
		

	}
}

	

	



	


