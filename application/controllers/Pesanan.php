<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PesananModel');
	}
	public function addpesanan()
    {
    $this->load->library('form_validation');

    // Set aturan validasi
   
    $this->form_validation->set_rules('alokasi', 'Alokasi Anggaran', 'required');
    $this->form_validation->set_rules('jumlahuang', 'Uang Sejumlah', 'required');
    $this->form_validation->set_rules('tglpesan', 'Tanggal Pesan', 'required');
    $this->form_validation->set_rules('tgllunas', 'Tanggal Lunas', 'required');

    if ($this->form_validation->run() == FALSE) {
        // Jika validasi gagal, tampilkan form lagi dengan pesan kesalahan
        $this->load->view('template/head');
        $this->load->view('forminput/formpesanan');
        $this->load->view('template/footer');
    } else {
        
        // Jika validasi berhasil, simpan data ke database
        
        $data = array(
            
            'no_faktur' => $this->input->post('faktur'),
            'kegiatanID' => $this->input->post('idkegiatan'),
            'id_penyedia' => $this->input->post('idpenyedia'),
            'penerimaID' => $this->input->post('idpenerima'),
            'id_barang' => $this->input->post('idbarang'),
            'alokasianggaran' => $this->input->post('alokasi'),
            'jumlahuang' => $this->input->post('jumlahuang'),
            'jumlahuanglatin' => $this->input->post('jumlahlatin'),
            'tgl_pesan' => $this->input->post('tglpesan'),
            'tgl_lunas' => $this->input->post('tgllunas')
        );

        $this->PesananModel->addpesanan($data);

        //tampilkan pesan sukses atau redirect ke halaman lain

        $data['pesanan'] = $this->PesananModel->getallpesanan();

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('datamaster/datapesanan', $data);
        $this->load->view('template/footer');
    }
}

 public function hapuspesanan($id)
    {
        $this->PesananModel->hapuspesanan($id);
        redirect('data/datapesanan');
        }
        
        public function pdf()
{
    $this->load->library('dompdf_gen');

    $data['pesanan'] = $this->PesananModel->tampil_data('pesanan')->result();
    $this->load->view('laporan', $data);

    $paper_size = 'A4';
    $orientation = 'portrait';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream('laporan_pesanan.pdf', array('Attachment' => 0));
}
}