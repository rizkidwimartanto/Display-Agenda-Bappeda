<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllersDisplayAgenda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelDisplayAgenda');
	}

	public function index()
	{
		$data['DataAgenda'] = $this->ModelDisplayAgenda->TampilData();
		$data['judul'] = "Agenda Bappeda";
		$this->load->view('headerfooter/header.php', $data);
		$this->load->view('index', $data);
		$this->load->view('headerfooter/footer.php');
	}
}
