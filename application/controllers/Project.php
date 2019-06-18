<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
 
	public function detail( $id = NULL )
	{
		if ( !$id ) show_404();
        $data['portfolio'] = $this->Crud_model->setTable('portfolio')->getWhere('id', $id);
		if ( !$data['portfolio'] ) show_404();
        $data['photos'] = $this->Crud_model->setTable('photo')->getWhereResult('id_portfolio', $id);
        $data['profile'] = $this->Crud_model->setTable('profile')->getWhere('id', 1);
        $data['title'] = 'Detail project';
        $this->load->model('Crud_model'); 
		$this->load->view('front/templates/header', $data);
		$this->load->view('front/project/index', $data);
		$this->load->view('front/templates/footer');
	}
 
}
