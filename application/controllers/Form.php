<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BarangModel');
		$this->load->model('KegiatanModel');
		$this->load->model('PenyediaModel');
		$this->load->model('PenerimaModel');
	}

public function formbendahara()
	{
		$this->load->view('template/head');
		$this->load->view('forminput/formbendahara');
		$this->load->view('template/footer');

	}
	public function formkepsek()
	{
		$this->load->view('template/head');

		$this->load->view('forminput/formkepsek');
		$this->load->view('template/footer');
			}
		
		public function formpenerima()
	{
		$this->load->view('template/head');
		$this->load->view('forminput/formpenerima');
		$this->load->view('template/footer');

	}

	public function formkegiatan()
	{
		$this->load->view('template/head');
		$this->load->view('forminput/formkegiatan');
		$this->load->view('template/footer');

	}


	public function formbarang()
	{

		$this->load->view('template/head');
		$this->load->view('forminput/formbarang');
		$this->load->view('template/footer');

	}

	public function formpenyedia()
	{

		$this->load->view('template/head');
		$this->load->view('forminput/formpenyedia');
		$this->load->view('template/footer');

	}


	public function formpesanan()
	{
		$data['barang'] = $this->BarangModel->getallbarang();
		$data['kegiatan'] = $this->KegiatanModel->getallkegiatan();
		$data['penyedia'] = $this->PenyediaModel->getallpenyedia();
		$data['penerima'] = $this->PenerimaModel->getallpenerima();
		$this->load->view('template/head');
		$this->load->view('forminput/formpesanan', $data);
		$this->load->view('template/footer');

	}

}