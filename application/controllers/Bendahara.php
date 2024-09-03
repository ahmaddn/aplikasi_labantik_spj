<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bendahara extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->model('BendaharaModel');
	}
	 public function addbendahara()
	{
		$this->load->library('form_validation');

		//set aturan validasi
		$this->form_validation->set_rules('nama', 'Nama Bendahara', 'required|is_unique[bendahara.namabendahara]');
		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('thnajaran', 'Tahun Ajaran', 'required');

		if ($this->form_validation->run() == FALSE) {
			// jika validasi gagal, kembali ke halaman registrasi
			$this->load->view('template/head');
			$this->load->view('forminput/formbendahara');
			$this->load->view('template/footer');
		} else {
			// jika validasi berhasil, simpan data ke database
			$data = array(
				'namabendahara' => $this->input->post('nama'),
				'nip' => $this->input->post('nip'),
				'tahunajaran' => $this->input->post('thnajaran'),
			);

			$this->BendaharaModel->addbendahara($data);

			//tampilkan pesan sukses atau redirect ke halaman lain 
			// echo "registrasi berhasil";
			$data['bendahara'] = $this->BendaharaModel->getallbendahara();
			
		
			$this->load->view('template/head');
			$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
			$this->load->view('datamaster/databendahara',$data);
			$this->load->view('template/footer');

			}
		}

		 public function hapusbendahara($id)
		{
		$this->BendaharaModel->hapus_bendahara($id);
		redirect('data/databendahara');
		}
	public function editbendahara($id)
	{
        $data['bendahara'] = $this->BendaharaModel->getUserByIdbendahara($id);
        

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('formedit/formeditbendahara', $data);
        $this->load->view('template/footer');
    }

    public function ubahBendahara()
    {
        $this->BendaharaModel->updatebendahara();
        redirect('data/databendahara');
    }
}