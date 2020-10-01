<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
		$this->load->model('User_model', 'um');
		$this->load->model('Pembayaran_model', 'pm');
		$this->load->model('Transaksi_model', 'tm');
		$this->load->model('Outlet_model', 'om');
		$this->load->model('Menu_model', 'memo');
	}

	public function index()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['title'] = "Halaman Dashboard";
		$data['transaksi'] = $this->tm->getTransaksiTgl(strtotime(date('Y-m-01 00:00:01')), strtotime(date('Y-m-d 23:59:58')));

		if (isset($_POST['cari_tanggal'])) {
			$tanggal_awal = date('Y-m-d 00:00:00', strtotime($this->input->post('tanggal_awal', true)));
			$tanggal_akhir = date('Y-m-d 23:59:59', strtotime($this->input->post('tanggal_akhir', true)));
			$status_bayar = $this->input->post('status_bayar', true);
			if ($status_bayar == 'semua') {
				$data['transaksi'] = $this->tm->getTransaksiTgl(strtotime($tanggal_awal), strtotime($tanggal_akhir));
			} else {
				$data['transaksi'] = $this->tm->getTransaksiTglStatusBayar(strtotime($tanggal_awal), strtotime($tanggal_akhir), $status_bayar);
			}

			// kirim data tanggal untuk riwayat penelusuran
			$data['tanggal_awal'] = $this->input->post('tanggal_awal');
			$data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
			$data['status_bayar'] = $status_bayar;
		}

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
		$data['outlet'] = $this->om->getAllOutlet();
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
	public function profile()
	{
		$this->mm->check_login();
		$data['outlet'] = $this->om->getAllOutlet();
		$data['dataUser'] = $this->mm->dataUser();
		$data['title'] = "Halaman Profile - " . $data['dataUser']['nama_user'];
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}

	public function gantiPassword()
	{
		$this->um->gantiPassword();
	}

	public function user()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['user'] = $this->um->getAllUser();
		$data['outlet'] = $this->om->getAllOutlet();
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
		$data['menu'] = $this->memo->getAllMenuByOutletUserLogin();
		$data['outlet'] = $this->om->getAllOutlet();
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