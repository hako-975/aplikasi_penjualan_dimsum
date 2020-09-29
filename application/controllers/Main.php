<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
		$this->load->model('User_model', 'um');
		$this->load->model('Outlet_model', 'om');
		$this->load->model('Menu_model', 'memo');
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

	// Outlet
	public function outlet()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['outlet'] = $this->db->get('tb_outlet')->result_array();
		$data['title'] = "Halaman Outlet";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('outlet/index', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function addOutlet()
	{
		$this->om->addOutlet();
	}

	public function editOutlet($id)
	{
		$this->om->editOutlet($id);
	}

	public function deleteOutlet($id)
	{
		$this->om->deleteOutlet($id);
	}

	// User
	public function user()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$this->db->order_by('jabatan', 'asc');
		$this->db->join('tb_outlet', 'tb_outlet.id_outlet=tb_user.id_outlet');
		$data['user'] = $this->db->get('tb_user')->result_array();
		$data['outlet'] = $this->db->get('tb_outlet')->result_array();
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

	public function editUser($id)
	{
		$this->um->editUser($id);
	}

	public function deleteUser($id)
	{
		$this->um->deleteUser($id);
	}

	// menu
	public function menu()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$this->db->join('tb_outlet', 'tb_menu.id_outlet=tb_outlet.id_outlet');
		$data['menu'] = $this->db->get_where('tb_menu', ['tb_menu.id_outlet' => $data['dataUser']['id_outlet']])->result_array();
		$data['outlet'] = $this->db->get('tb_outlet')->result_array();
		$data['title'] = "Halaman Menu";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('menu/index', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function addMenu()
	{
		$this->memo->addMenu();
	}

	public function editMenu($id)
	{
		$this->memo->editMenu($id);
	}

	public function deleteMenu($id)
	{
		$this->memo->deleteMenu($id);
	}
}

 ?>