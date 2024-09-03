<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerima extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PenerimaModel');
		$this->load->model('UserModel');
	}

	public function addpenerima()
	{
		$this->load->library('form_validation');

		//set aturan validasi
		$this->form_validation->set_rules('nama', 'Nama Penerima', 'required|is_unique[penerima.namapenerima]');
		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('thnajaran', 'Tahun Ajaran', 'required');

		if ($this->form_validation->run() == FALSE) {
			// jika validasi gagal, kembali ke halaman registrasi
			$this->load->view('template/head');
			$this->load->view('forminput/formpenerima');
			$this->load->view('template/footer');
		} else {
			// jika validasi berhasil, simpan data ke database
			$data = array(
				'namapenerima' => $this->input->post('nama'),
				'nip' => $this->input->post('nip'),
				'tahunajaran' => $this->input->post('thnajaran'),
			);

			$this->PenerimaModel->addpenerima($data);

			//tampilkan pesan sukses atau redirect ke halaman lain 
			// echo "registrasi berhasil";
			$data['penerima'] = $this->PenerimaModel->getallpenerima();
			$userID = $this->session->userdata('userid');
        	$data['user'] = $this->UserModel->getlevelbyid($userID);

			$this->load->view('template/head');
			$this->load->view('template/sidebar', $data);
			$this->load->view('template/rightbar');
			$this->load->view('template/topbar');
			$this->load->view('datamaster/datapenerima',$data);
			$this->load->view('template/footer');

			}
		}

		public function hapuspenerima($id)
		{
		$this->PenerimaModel->hapus_penerima($id);
		redirect('data/datapenerima');
		}
		public function editpenerima($id)
    {
        $data['penerima'] = $this->PenerimaModel->getUserByIdpenerima($id);
        

        $this->load->view('template/head');
        ;$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('formedit/formeditpenerima', $data);
        $this->load->view('template/footer');
    }

   


    public function ubahDataPenerima()
    {
        $this->PenerimaModel->updatepenerima();
        redirect('data/datapenerima');
    }

   
}