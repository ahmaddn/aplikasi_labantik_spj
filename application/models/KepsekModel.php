<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KepsekModel extends CI_Model
{ 
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
}

	public function getUserByIdkepsek($id)
    {
        return $this->db->get_where('kepsek', ['kepsekID' => $id])->row_array(); 
    }

    public function addkepsek($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('kepsek', $data);
	}

	public function getallkepsek(){
		return $this->db->get('kepsek')->result_array();
	
}

	public function updatekepsek()
    {
        $data = [
            'namakepsek' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'tahunajaran' => $this->input->post('tahunajaran'),
            'namasekolah' => $this->input->post('namasekolah'),
            'alamatsekolah' => $this->input->post('alamat')
        ];
        $this->db->where('kepsekID', $this->input->post('kepsekID'));
        $this->db->update('kepsek', $data);
    }

	public function hapuskepsek($id)
	{
	$this->db->delete('kepsek', ['kepsekID' => $id]);
	}
}
?>