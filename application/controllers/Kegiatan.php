<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller { 
	    public function __construct()
    {
        parent::__construct();
        $this->load->model('KegiatanModel');
    }

	public function addkegiatan()
	{
    $this->load->library('form_validation');

    // Set aturan validasi
    $this->form_validation->set_rules('nama', 'Nama Pekerjaaan', 'required');
    $this->form_validation->set_rules('tglpesanan', 'Tanggal Pesanan', 'required');
    $this->form_validation->set_rules('tglditerima', 'Tanggal Diterima', 'required');
    $this->form_validation->set_rules('waktu', 'Waktu Penyelesaian', 'required');
    $this->form_validation->set_rules('keterangan', 'Keterangan Terima', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, tampilkan form lagi dengan pesan kesalahan
        $this->load->view('template/head');
        $this->load->view('forminput/formkegiatan');
        $this->load->view('template/footer');
    } else {
        // Jika validasi berhasil, simpan data ke database
        $data = array(
            'namapekerjaan' => $this->input->post('nama'),
            'tanggalpesanan' => $this->input->post('tglpesanan'),
            'tanggalditerima' => $this->input->post('tglditerima'),
            'waktupenyelesaian' => $this->input->post('waktu'),
            'keteranganterima' => $this->input->post('keterangan')
        );

        $this->KegiatanModel->addkegiatan($data);

        //tampilkan pesan sukses atau redirect ke halaman lain

        $data['kegiatan'] = $this->KegiatanModel->getallkegiatan();

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
		$this->load->view('datamaster/datakegiatan', $data);
		$this->load->view('template/footer');
	}
}

 public function deletekegiatan($id)
	{
		$this->KegiatanModel->hapuskegiatan($id);
		redirect('data/datakegiatan');
		}
		public function editkegiatan($id)
    {
        $data['kegiatan'] = $this->KegiatanModel->getUserByIdkegiatan($id);
        

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('formedit/formeditkegiatan', $data);
        $this->load->view('template/footer');
    }

    public function ubahkegiatan()
    {
        $this->KegiatanModel->updatekegiatan();
        redirect('data/datakegiatan');
    }



}?>