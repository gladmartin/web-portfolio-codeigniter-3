<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');
        $this->load->model('Crud_model');
	}
 
	public function index()
	{
        $data['title'] = 'Message';
        $data['message'] = $this->Crud_model->setTable('message')->getAll();
		$this->load->view('back/templates/header', $data);
		$this->load->view('back/templates/sidebar');
		$this->load->view('back/message/index');
		$this->load->view('back/templates/footer');
    }
    
    public function detail( $id = NULL )
	{
        if ( !$id ) show_404();
        $sender = $this->Crud_model->setTable('message')->getWhere('id', $id);
        if ( !$sender ) show_404();
        if ( $sender->seen == 0 ) $this->Crud_model->editData( ['seen' => 1], 'id', $id );
        $data['sender'] = $sender;
        $data['title'] = 'Detail Message';
		$this->load->view('back/templates/header', $data);
		$this->load->view('back/templates/sidebar');
		$this->load->view('back/message/detail');
		$this->load->view('back/templates/footer');
	}

	public function delete( $id = null )
	{
		if (!$id) show_404();
		$message = $this->Crud_model->setTable('message')->getWhere( 'id', $id );  
		if ( $this->Crud_model->delete( 'id', $id ) )
		{
			$this->session->set_flashdata( 'flash', 'berhasil dihapus' );
		}
		else 
		{
			$this->session->set_flashdata( 'flash', 'gagal dihapus' );
		}
		redirect( 'admin/message' );
	}
}
