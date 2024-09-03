<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyedia extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PenyediaModel');
	}

	public function addpenyedia()
	{
		$this->load->library('form_validation');

		//set aturan validasi
		$this->form_validation->set_rules('nameperusahaan', 'Nama Perusahaan', 'required|is_unique[penyedia.namaperusahaan]');
		$this->form_validation->set_rules('npwp', 'NPWP', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat Perusahaan', 'required');
		$this->form_validation->set_rules('norek', 'Nomor Rekening', 'required');
		$this->form_validation->set_rules('namapwk', 'Nama Perwakilan', 'required');
		$this->form_validation->set_rules('jabatanpwk', 'Jabatan Perwakilan', 'required');

		if ($this->form_validation->run() == FALSE) {
			// jika validasi gagal, kembali ke halaman registrasi
			$this->load->view('template/head');
			$this->load->view('forminput/formpenyedia');
			$this->load->view('template/footer');
		} else {
			// jika validasi berhasil, simpan data ke database
			$data = array(
				'namaperusahaan' => $this->input->post('nameperusahaan'),
				'npwp' => $this->input->post('npwp'),
				'alamat' => $this->input->post('alamat'),
				'no_rekening' => $this->input->post('norek'),
				'namapwk' => $this->input->post('namapwk'),
				'jabatanpwk' => $this->input->post('jabatanpwk')
			);

			$this->PenyediaModel->addpenyedia($data);

			//tampilkan pesan sukses atau redirect ke halaman lain 
			// echo "registrasi berhasil";
			$data['penyedia'] = $this->PenyediaModel->getallpenyedia();
			
		
			$this->load->view('template/head');
			$this->load->view('template/sidebar');
            $this->load->view('template/topbar');
			$this->load->view('datamaster/datapenyedia',$data);
			$this->load->view('template/footer');

			}
		}

		public function hapuspenyedia($id)
		{
		$this->PenyediaModel->hapus_penyedia($id);
		redirect('data/datapenyedia');
		}
		public function editpenyedia($id)
    {
        $data['penyedia'] = $this->PenyediaModel->getUserByIdpenyedia($id);
        

        $this->load->view('template/head');
        ;$this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('formedit/formeditpenyedia', $data);
        $this->load->view('template/footer');
    }

   


    public function ubahDataPenerima()
    {
        $this->PenerimaModel->updatepenerima();
        redirect('data/datapenerima');
    }

   
}