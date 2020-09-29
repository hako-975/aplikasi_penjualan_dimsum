<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {
	public function getAllTransaksi()
	{
		return $this->db->get('tb_transaksi')->result_array();
	}

}