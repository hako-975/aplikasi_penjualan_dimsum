<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Prints extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
		$this->load->model('User_model', 'um');
		$this->load->model('Outlet_model', 'om');
		$this->load->model('Menu_model', 'memo');
		$this->load->model('Log_model', 'lm');
	}

	public function profile($id)
	{
		$this->lm->addLog('Print profile', $this->mm->dataUser()['id_user']);
		$data['userProfile'] = $this->um->getUserById($id);
		$data['title'] = 'Print Profle - ' . $data['userProfile']['nama_user'];
		$this->load->view('templates/header', $data);
		$this->load->view('prints/profile', $data);
		$this->load->view('templates/footer', $data);
	}
}

 ?>