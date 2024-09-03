<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepsek extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('KepsekModel');
    }
public function addkepsek()
	{
    $this->load->library('form_validation');

    // Set aturan validasi
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nip', 'NIP', 'required');
    $this->form_validation->set_rules('tahunajaran', 'Tahun Ajaran', 'required');
    $this->form_validation->set_rules('namasekolah', 'Nama Sekolah', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, tampilkan form lagi dengan pesan kesalahan
        $this->load->view('template/head');
        $this->load->view('forminput/formkepsek');
        $this->load->view('template/footer');
    } else {
        // Jika validasi berhasil, simpan data ke database
        $data = array(
            'namakepsek' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'tahunajaran' => $this->input->post('tahunajaran'),
            'namasekolah' => $this->input->post('namasekolah'),
            'alamatsekolah' => $this->input->post('alamat')
        );

        $this->KepsekModel->addkepsek($data);

        //tampilkan pesan sukses atau redirect ke halaman lain

        $data['kepsek'] = $this->KepsekModel->getallkepsek();

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
		$this->load->view('datamaster/datakepsek', $data);
		$this->load->view('template/footer');
        }
    }

		
    public function deletekepsek($id)
	{
		$this->KepsekModel->hapuskepsek($id);
		redirect('data/datakepsek');
		}
		public function editkepsek($id)
    {
        $data['kepsek'] = $this->KepsekModel->getUserByIdkepsek($id);
        

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('formedit/formeditkepsek', $data);
        $this->load->view('template/footer');
    }

    public function ubahkepsek()
    {
        $this->KepsekModel->updatekepsek();
        redirect('data/datakepsek');
    }
}