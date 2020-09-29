<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
	public function check_login()
	{
		if (!$this->session->userdata('id_user')) {
			redirect('auth');
		}
	}

	public function dataUser()
	{
		$this->check_login();
		return $this->db->get_where('tb_user', ['id_user' => $this->session->userdata('id_user')])->row_array();
	}
}