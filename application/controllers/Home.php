<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 
	public function index()
	{
		$this->load->model(['Crud_model', 'Profile_model']);
		$data['profile']   = $this->Crud_model->setTable('profile')->getWhere('id', 1);
		$data['portfolio'] = $this->Crud_model->setTable('portfolio')->getAll();
		$data['title']     = 'Home';  
		$this->load->view('front/templates/header', $data);
		$this->load->view('front/home/index', $data);
		$this->load->view('front/templates/footer');
	}

	public function contactStore()
	{
		if ( !$this->input->is_ajax_request() ) show_404();
		$this->load->library('form_validation');
		$this->load->model('Crud_model');
		$rules =  [
			['field' => 'name','label' => 'Name','rules' => 'required|min_length[3]'],  					
			['field' => 'email','label' => 'Email','rules' => 'required|valid_email'], 
			['field' => 'message','label' => 'Message','rules' => 'required|min_length[5]']
		];
		$this->form_validation->set_rules( $rules ); 
		if ( $this->form_validation->run() )
		{
			$data = [
				'name'    => htmlspecialchars($this->input->post('name')),
				'email'   => htmlspecialchars($this->input->post('email')),
				'subject' => htmlspecialchars($this->input->post('subject')),
				'body'    => htmlspecialchars($this->input->post('message'))
			]; 
			$query = $this->Crud_model->setTable('message')->addData( $data );  
			if ( $query )
			{
				echo "success";
			}
			else
			{
				echo "failed";
			}
	
		}
		else 
		{
			echo validation_errors();	
		}
	}
}
