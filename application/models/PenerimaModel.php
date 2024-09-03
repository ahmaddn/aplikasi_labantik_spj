<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenerimaModel extends CI_Model 
{

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	}

	public function addpenerima($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('penerima', $data);
	}
	public function getallpenerima(){
			
		return $this->db->get('penerima')->result_array();
	}

	public function getUserByIdpenerima($id)
    {
        return $this->db->get_where('penerima', ['penerimaID' => $id])->row_array(); 

    }

    public function getPenerimaById($id)
    {
    	return $this->db->where('penerimaID', $penerima)->get('penerima')->row_array();
    }

    public function updatepenerima()
    {
        $data = [
            "namapenerima" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "tahunajaran" => $this->input->post('thnajaran', true)
        ];
        $this->db->where('penerimaID', $this->input->post('penerimaID'));
        $this->db->update('penerima', $data);
    }

	public function hapus_penerima($id)
	{
	$this->db->delete('penerima', ['penerimaID' => $id]);
	} 
}?>