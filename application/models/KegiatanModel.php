<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KegiatanModel extends CI_Model {

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
}

public function addkegiatan($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('kegiatan', $data);
	} 

	public function getallkegiatan(){
		return $this->db->get('kegiatan')->result_array();
	}

	public function getUserByIdkegiatan($id)
    {
        return $this->db->get_where('kegiatan', ['kegiatanID' => $id])->row_array(); 
    }

    public function getKegiatanById($id)
    {
    	return $this->db->where('kegiatanID', $kegiatan)->get('kegiatan')->row_array();
    }

	public function updatekegiatan()
    {
        $data = [
            'namapekerjaan' => $this->input->post('nama'),

            'tanggalditerima' => $this->input->post('tglditerima'),
            'waktupenyelesaian' => $this->input->post('waktu'),
            'keteranganterima' => $this->input->post('keterangan')
        ];
        $this->db->where('kegiatanID', $this->input->post('kegiatanID'));
        $this->db->update('kegiatan', $data);
    }

	public function hapuskegiatan($id)
	{
	$this->db->delete('kegiatan', ['kegiatanID' => $id]);
	}


}?>