<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
	}

	public function getTransaksiByIdOutlet($id_outlet)
	{
		$this->db->join('tb_menu', 'tb_menu.id_menu=tb_transaksi.id_menu', 'left');
		$this->db->join('tb_outlet', 'tb_outlet.id_outlet=tb_transaksi.id_outlet', 'left');
		$this->db->join('tb_user', 'tb_user.id_user=tb_transaksi.id_user', 'left');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get_where('tb_transaksi', ['tb_transaksi.id_outlet' => $id_outlet])->result_array();
	}

	public function getTransaksiById($id)
	{
		$this->db->join('tb_menu', 'tb_menu.id_menu=tb_transaksi.id_menu');
		$this->db->join('tb_outlet', 'tb_outlet.id_outlet=tb_transaksi.id_outlet');
		$this->db->join('tb_user', 'tb_user.id_user=tb_transaksi.id_user');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get_where('tb_transaksi', ['tb_transaksi.id_transaksi' => $id])->row_array();
	}

	public function kodeInvoice($tgl_transaksi, $id_outlet, $id_user , $field, $initial)
	{
		// ambil kolom terakhir pada table
		$query = "SELECT max($field) AS field FROM tb_transaksi INNER JOIN tb_outlet ON tb_transaksi.id_outlet = tb_outlet.id_outlet";
		$last_id_transaksi = $this->db->query($query)->row_array();
		$data_transaksi = $this->getTransaksiById($last_id_transaksi['field']);
		// ambil tanggal
		$just_date = date('dmY', $tgl_transaksi);
		// ambil tanggal terakhir pada db
		$last_row_date = substr($data_transaksi['kode_invoice'], 0, 8);
		// jika tanggal tidak sama dengan tanggal sebelumnya, maka atur angka dari 000 kembali
		if ($just_date == $last_row_date) {
			$field = $data_transaksi['kode_invoice'];
		} else {
			// ambil bagian depan kode invoice sbg tanggal
			$field = $just_date . $id_outlet . $id_user  . 'T' . '0000';
		}
		// ambil id terakhir dari depan
		$substr = substr($field, -4);
		// Conversi menjadi int
		$conv = (int) $substr;
		// tambahkan increase pada kode
		$inc = $conv + 1;
		
		// membuat kode otomatis cth: 009, 010, 011 dan hasil akhir
		$result_code = $just_date . str_pad($id_outlet, 2, "0", STR_PAD_LEFT) . str_pad($id_user, 2, "0", STR_PAD_LEFT)  . $initial . str_pad($inc, 4, "0", STR_PAD_LEFT);
		return $result_code;
	}

	public function addTransaksi()
	{
		$tanggal_transaksi = time();
		$id_user = $this->mm->dataUser()['id_user'];
		$id_outlet = $this->mm->dataUser()['id_outlet'];
		$kode_invoice = $this->kodeInvoice($tanggal_transaksi, $id_outlet, $id_user, 'id_transaksi', 'T');

		$data = [
			'kode_invoice' => $kode_invoice,
			'kuantitas' => $this->input->post('kuantitas', true),
			'status_bayar' => 'belum_dibayar',
			'tgl_transaksi' => $tanggal_transaksi,
			'id_menu' => $this->input->post('id_menu', true),
			'id_user' => $id_user,
			'id_outlet' => $id_outlet
		];

		$this->db->insert('tb_transaksi', $data);
		$this->session->set_flashdata('message-success', 'Transaksi baru dengan kode invoice ' . $data['kode_invoice'] . ' berhasil ditambahkan');
		$this->lm->addLog('Transaksi baru dengan kode invoice <b>' . $data['kode_invoice'] . '</b> berhasil ditambahkan', $this->mm->dataUser()['id_user']);
		redirect('transaksi');
	}
}