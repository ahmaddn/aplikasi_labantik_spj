<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BendaharaModel extends CI_Model 
{

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
}
	public function addbendahara($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('bendahara', $data);
	}

	public function getallbendahara(){
		return $this->db->get('bendahara')->result_array();
	}


	public function getUserByIdbendahara($id)
    {
        return $this->db->get_where('bendahara', ['bendaharaID' => $id])->row_array(); 
        $user=$this->db->query("select * from bendahara")->result_array();
    }


	public function updatebendahara()
    {
        $data = [
            "namabendahara" => $this->input->post('nama', true),
            "nip" => $this->input->post('nip', true),
            "tahunajaran" => $this->input->post('thnajaran', true)
        ];
        $this->db->where('bendaharaID', $this->input->post('bendaharaID'));
        $this->db->update('bendahara', $data);
    }

	public function hapus_bendahara($id)
	{
	$this->db->delete('bendahara', ['bendaharaID' => $id]);
	}
}


