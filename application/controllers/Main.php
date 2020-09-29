<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
		$this->load->model('User_model', 'um');
	}

	public function index()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['title'] = "Halaman Dashboard";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('main/index', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}

	// User
	public function user()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['user'] = $this->db->get('tb_user')->result_array();
		$data['title'] = "Halaman User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function addUser()
	{
		$this->um->addUser();
	}

	public function deleteUser($id)
	{
		$this->um->deleteUser($id);
	}
}

 ?>