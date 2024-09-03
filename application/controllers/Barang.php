<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BarangModel');
	}
	public function addbarang()
	{
    $this->load->library('form_validation');

    // Set aturan validasi
    $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
    $this->form_validation->set_rules('jumlahbarang', 'Jumlah Barang', 'required');
    $this->form_validation->set_rules('hargabarang', 'Harga Barang', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, tampilkan form lagi dengan pesan kesalahan
        $this->load->view('template/head');
        $this->load->view('forminput/formbarang');
        $this->load->view('template/footer');
    } else {
        $jumlah = $this->input->post('jumlahbarang');
        $harga =  $this->input->post('hargabarang');

        $jumlahharga = $jumlah * $harga;
        
        // Jika validasi berhasil, simpan data ke database
        
        $data = array(
            'namabarang' => $this->input->post('nama'),
            'jumlahbarang' => $this->input->post('jumlahbarang'),
            'hargabarang' => $this->input->post('hargabarang'),
            'jumlahharga' => $jumlahharga
        );

        $this->BarangModel->addbarang($data);

        //tampilkan pesan sukses atau redirect ke halaman lain

        $data['barang'] = $this->BarangModel->getallbarang();

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
		$this->load->view('datamaster/databarang', $data);
		$this->load->view('template/footer');
	}
}

 public function hapusbarang($id)
	{
		$this->BarangModel->hapusbarang($id);
		redirect('data/databarang');
		}

  public function editbarang($id)
    {
        $data['barang'] = $this->BarangModel->getUserByIdbarang($id);
        

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('formedit/formeditbarang', $data);
        $this->load->view('template/footer');
    }      
		
    public function ubahbarang()
    {
        $this->BarangModel->updatebarang();
        redirect('data/databarang');
    }
}