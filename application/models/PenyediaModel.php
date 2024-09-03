<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyediaModel extends CI_Model 
{

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	}

	public function addpenyedia($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('penyedia', $data);
	}
	public function getallpenyedia(){
			
		return $this->db->get('penyedia')->result_array();
	}

	public function getUserByIdpenyedia($id)
    {
        return $this->db->get_where('penyedia', ['id_penyedia' => $id])->row_array(); 

    }

    public function getPenyediaById($id)
    {
    	return $this->db->where('id_penyedia', $penyedia)->get('penyedia')->row_array();
    }

    // public function updatepenyedia()
    // {
    //     $data = [
    //         "namapenerima" => $this->input->post('nama', true),
    //         "nip" => $this->input->post('nip', true),
    //         "tahunajaran" => $this->input->post('thnajaran', true)
    //     ];
    //     $this->db->where('penerimaID', $this->input->post('penerimaID'));
    //     $this->db->update('penerima', $data);
    // }

	public function hapus_penyedia($id)
	{
	$this->db->delete('penyedia', ['id_penyedia' => $id]);
	} 
}?>