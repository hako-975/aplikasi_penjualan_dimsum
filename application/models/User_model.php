<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getUserById($id)
	{
		return $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
	}

	public function addUser()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$password_verifikasi = $this->input->post('password_verifikasi', true);
		$check = $this->db->get_where('tb_user', ['username' => $username])->row_array();
		if ($check) {
			$this->session->set_flashdata('message-failed', 'Username sudah digunakan!');
			redirect('main/user');
			return false;
		}

		if ($password !== $password_verifikasi) {
			$this->session->set_flashdata('message-failed', 'Password verifikasi yang anda masukkan tidak sesuai dengan password!');
			redirect('main/user');
			return false;			
		}
		
		$password = password_hash($password, PASSWORD_DEFAULT);

		$data = [
			'nama_user' => $this->input->post('nama_user', true),
			'username' => $username,
			'password' => $password,
			'jabatan' => $this->input->post('jabatan', true)
		];

		$this->db->insert('tb_user', $data);
		$this->session->set_flashdata('message-success', 'User baru dengan nama user ' . $data['nama_user'] . ' berhasil ditambahkan!');
		redirect('main/user');
	}	

	public function deleteUser($id_user)
	{
		$data = $this->getUserById($id_user);
		$username = $data['nama_user'];
		$this->db->delete('tb_user', ['id_user' => $id_user]);
		$this->session->set_flashdata('message-success', 'User dengan nama user ' . $username . ' berhasil dihapus!');
		redirect('main/user');
	}
}