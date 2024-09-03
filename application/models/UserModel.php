<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model 
{

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	}
	
	public function register($data)
	{
		//simpan data ke tabel 'user'
		$this->db->insert('user', $data);
	} 

	
	public function get_user($username){
		// ambil data user berrdasarkan username
		return $this->db->get_where('user',  array('username' => $username ))->row_array();
	
}

	public function getlevelById($id) {
			return $this->db->where('userID', $id)->get('user')->result_array();

    }

	

		

	

	





}
