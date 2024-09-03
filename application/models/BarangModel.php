	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model
{ 

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
}

	public function addbarang($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('barang', $data);
	} 

	public function getallbarang(){
		return $this->db->get('barang')->result_array();
	}

	public function getUserByIdbarang($id)
    {
        return $this->db->get_where('barang', ['id_barang' => $id])->row_array(); 
    }

    public function getBarangById($id)
    {
    	return $this->db->where('id_barang', $barang)->get('barang')->row_array();
    }

	public function updatebarang()
    {
    	$jumlah = $this->input->post('jumlah');
    	$harga = $this->input->post('harga');

    	$jumlahharga = $jumlah * $harga;
        $data = [
            'namabarang' => $this->input->post('nama'),
            'jumlahbarang' => $this->input->post('jumlah'),
            'hargabarang' => $this->input->post('harga'),
            'jumlahharga' => $jumlahharga
        ];
        $this->db->where('barangID', $this->input->post('barangID'));
        $this->db->update('barang', $data);
    }

	public function hapusbarang($id)
	{
	$this->db->delete('barang', ['id_barang' => $id]);
}
}
