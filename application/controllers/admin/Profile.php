<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');		
		$this->load->model('Crud_model');
	}
 
	public function index()
	{
		$data['title'] = 'Profile'; 
		$data['profile'] = $this->Crud_model->setTable('profile')->getWhere('id', 1);
		$this->load->view('back/templates/header', $data);
		$this->load->view('back/templates/sidebar');
		$this->load->view('back/profile/index', $data);
		$this->load->view('back/templates/footer');
	}

	public function edit( $id = NULL )
	{
		if ( !$id ) show_404();
		$this->load->library('form_validation');
		$rules =  [
			['field' => 'nickname','label' => 'Nick Name','rules' => 'required|min_length[4]'], 
			['field' => 'fullname','label' => 'Full Name','rules' => 'required|min_length[4]'],					
			['field' => 'email','label'    => 'Email','rules'     => 'required|valid_email'],
			['field' => 'phone','label'    => 'Phone','rules'     => 'required'],
			['field' => 'birth','label'    => 'Birth','rules'     => 'required'],
			['field' => 'job','label'      => 'Job','rules'       => 'required'],
			['field' => 'address','label'  => 'Address','rules'   => 'required'],
			['field' => 'about','label'    => 'About','rules'     => 'required'],
			['field' => 'website','label'  => 'Website','rules'   => 'required']
		];
		$this->form_validation->set_rules( $rules );
		$data['profile'] = $this->Crud_model->setTable('profile')->getWhere('id', $id);
		if ( !$data['profile'] ) show_404();
		if ( $this->form_validation->run() )
		{
			$photo  = $this->input->post('oldphoto');
			if ( $_FILES['photo']['error'] != 4 ) 
			{
				if ( $photo = $this->Crud_model->uploadImage('assets/images') ) 
				{
					$this->Crud_model->unlink('./assets/images/' . $this->input->post('oldphoto'));
				}
			}
			if ( $photo )
			{
				$data = [
					'nickname' => $this->input->post('nickname'),
					'fullname' => $this->input->post('fullname'),
					'email'    => $this->input->post('email'),
					'phone'    => $this->input->post('phone'),
					'birth'    => $this->input->post('birth'),
					'job'      => $this->input->post('job'),
					'address'  => $this->input->post('address'),
					'about'    => $this->input->post('about'),
					'website'  => $this->input->post('website'),
					'photo'	   => $photo
				];
				$ionData = ['username'=> $this->input->post('nickname'),'email'=> $this->input->post('email')]; 
				$query = $this->Crud_model->setTable('profile')->editData( $data, 'id', $this->input->post('id') );  
				if ( $query  AND $this->ion_auth->update($this->session->userdata('user_id'), $ionData) )
				{
					$this->session->set_flashdata('flash', 'berhasil ditambahkan');
				}
				else
				{
					$this->session->set_flashdata('flash', 'Gagal ditambahkan');
				}
				redirect('admin/profile');
			}		
	
		} 
		$data['title'] = 'Edit Profile';
		$this->load->view('back/templates/header', $data);
		$this->load->view('back/templates/sidebar');
		$this->load->view('back/profile/edit', $data);
		$this->load->view('back/templates/footer');
	}	

	public function changepassword()
	{
		$this->load->library('form_validation');
		$rules =  [
			['field' => 'oldpassword','label' => 'Old password','rules' => 'required'], 
			['field' => 'newpassword','label' => 'New password','rules' => 'required|min_length['. $this->config->item('min_password_length', 'ion_auth') .']'],					
			['field' => 'confirmpassword','label' => 'Confirm password','rules' => 'required|matches[newpassword]']
		];
		$this->form_validation->set_rules( $rules );
		if ( $this->form_validation->run() )
		{ 
			$identity = $this->session->userdata('identity');
			$change = $this->ion_auth->change_password($identity, $this->input->post('oldpassword'), $this->input->post('newpassword'));
			if ($change)
			{ 
				$this->session->set_flashdata('message', $this->ion_auth->messages()); 
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors()); 
			}
			redirect('admin/profile/changepassword');
		}
		else
		{
			$data['title'] = 'Change password';
			$this->load->model('Crud_model'); 
			$this->load->view('back/templates/header', $data);
			$this->load->view('back/templates/sidebar');
			$this->load->view('back/profile/changepassword', $data);
			$this->load->view('back/templates/footer');
	
		}
	}
}
