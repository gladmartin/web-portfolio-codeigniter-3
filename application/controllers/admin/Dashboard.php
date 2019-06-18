<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');
	}
 
	public function index()
	{
		$data['title'] = 'Administrator';
		$this->load->view('back/templates/header', $data);
		$this->load->view('back/templates/sidebar');
		$this->load->view('back/index');
		$this->load->view('back/templates/footer');
	}
}
