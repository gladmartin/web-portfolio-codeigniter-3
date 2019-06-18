<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if (!$this->ion_auth->logged_in()) redirect('auth/login', 'refresh');
        $this->load->model('Crud_model'); 
	}
 
	public function list()
	{ 
		$data['title']     = 'List Portfolio';
		$data['portfolio'] = $this->Crud_model->setTable('portfolio')->getAll();
		$this->load->view('back/templates/header', $data);
		$this->load->view('back/templates/sidebar');
		$this->load->view('back/portfolio/list', $data);
		$this->load->view('back/templates/footer');
	}

	public function add()
	{ 		
		$this->load->library('form_validation');
		$rules =  [
			['field' => 'title','label' => 'Title Project','rules' => 'required|min_length[4]'], 
			['field' => 'category','label' => 'Category','rules' => 'required|min_length[4]'],					
			['field' => 'date','label' => 'Date','rules' => 'required'],
			['field' => 'description','label' => 'Description','rules' => 'required']
		];
		$this->form_validation->set_rules( $rules ); 
		if ( $this->form_validation->run() )
		{ 
            if ( $photo = $this->Crud_model->multiple_upload() AND $thumbnail = $this->Crud_model->uploadImage()  ) 
			{
				$data = [
                    'title'       => $this->input->post('title'),
                    'category'    => $this->input->post('category'),
                    'date'        => $this->input->post('date'),
                    'description' => $this->input->post('description'),
                    'thumbnail'       => $thumbnail
                ]; 
				$query = $this->Crud_model->setTable('portfolio')->addDataGetId( $data );
				foreach ( $photo as $p )
				{
					$data = [
						'id_portfolio' => $query,
						'photo'        => $p
					];
					$this->Crud_model->setTable('photo')->addData( $data );  
				}				
				$this->session->set_flashdata('flash', 'berhasil ditambahkan');				
                redirect('admin/portfolio/list');
			} 	
		}           
        $data['title'] = 'Add Portfolio';
        $this->load->view('back/templates/header', $data);
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/portfolio/add');
        $this->load->view('back/templates/footer');	  
    }	

    public function edit( $id = NULL )
	{ 		
        if ( !$id ) show_404();
        $data['portfolio'] = $this->Crud_model->setTable('portfolio')->getWhere('id', $id);
		if ( !$data['portfolio'] ) show_404();
        $data['photos'] = $this->Crud_model->setTable('photo')->getWhereResult('id_portfolio', $id);
		$this->load->library('form_validation');
		$rules =  [
			['field' => 'title','label' => 'Title Project','rules' => 'required|min_length[4]'], 
			['field' => 'category','label' => 'Category','rules' => 'required|min_length[4]'],					
			['field' => 'date','label' => 'Date','rules' => 'required'],
			['field' => 'description','label' => 'Description','rules' => 'required']
		];
		$this->form_validation->set_rules( $rules ); 
		if ( $this->form_validation->run() )
		{
            $thumbnail  = $this->input->post('oldphoto');
			if ( $_FILES['photo']['error'] != 4 ) 
			{
				if ( $thumbnail = $this->Crud_model->uploadImage() ) 
				{
					$this->Crud_model->unlink('./assets/images/portfolio/' . $this->input->post('oldphoto'));
				}
			}
			$photos = $this->Crud_model->multiple_upload();
            if ( $thumbnail ) 
			{
				$data = [
                    'title'       => $this->input->post('title'),
                    'category'    => $this->input->post('category'),
                    'date'        => $this->input->post('date'),
                    'description' => $this->input->post('description'),
                    'thumbnail'   => $thumbnail
                ]; 
				$query = $this->Crud_model->setTable('portfolio')->editData( $data, 'id', $id ); 
				foreach ( $photos as $p )
				{
					$data = [
						'id_portfolio' => $id,
						'photo'        => $p
					];
					$this->Crud_model->setTable('photo')->addData( $data );  
				} 
                if ( $query )
                {
                    $this->session->set_flashdata('flash', 'berhasil diubah');
                }
                else
                {
                    $this->session->set_flashdata('flash', 'Gagal diubah');
                }
                redirect('admin/portfolio/list');
			} 	
		}           
        $data['title'] = 'Edit Portfolio';
        $this->load->view('back/templates/header', $data);
        $this->load->view('back/templates/sidebar');
        $this->load->view('back/portfolio/edit', $data);
        $this->load->view('back/templates/footer');	  
    }	
    
    public function delete( $id = null )
	{
		if (!$id) show_404();
		$portfolio = $this->Crud_model->setTable('portfolio')->getWhere( 'id', $id ); 
		$this->Crud_model->unlink( './assets/images/portfolio/' . $portfolio->thumbnail );
		$photos    = $this->Crud_model->setTable('photo')->getWhereResult( 'id_portfolio', $id );
		foreach ($photos as $p) 
		{
			$this->Crud_model->unlink( './assets/images/portfolio/' . $p->photo );
		} 
		if ( $this->Crud_model->setTable('portfolio')->delete( 'id', $id ) AND $this->Crud_model->setTable('photo')->delete( 'id_portfolio', $id ) )
		{
			$this->session->set_flashdata( 'flash', 'berhasil dihapus' );
		}
		else 
		{
			$this->session->set_flashdata( 'flash', 'gagal dihapus' );
		}
		redirect( 'admin/portfolio/list' );
	}

	public function deletephotoajax()
	{
		$id = $this->input->post('id');
		$photo = $this->Crud_model->setTable('photo')->getWhere( 'id', $id ); 
		$this->Crud_model->unlink( './assets/images/portfolio/' . $photo->photo );
		if ( $this->Crud_model->setTable('photo')->delete( 'id', $id ) )
		echo 1;
		else echo 0;
	}

}
