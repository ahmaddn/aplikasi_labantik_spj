<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesananModel extends CI_Model 
{

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	}
	
	public function addpesanan($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('pesanan', $data);
	} 

	

	public function getUserByIdpesanan($id)
    {
        return $this->db->get_where('pesanan', ['pesananID' => $id])->row_array(); 
    }
	public function hapuspesanan($id)
	{
	$this->db->delete('pesanan', ['pesananID' => $id]);
}

public function getallpesanan(){
		return $this->db->get('pesanan')->result_array();
	}}?>