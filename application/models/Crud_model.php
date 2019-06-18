<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model { 

	private $table;
	
	public function setTable( $table )
	{
		$this->table = $table;
		return $this;
	}

	public function getAll()
	{
        return $this->db->get( $this->table )->result();
	}

	public function getWhere($field, $val)
	{
		return $this->db->get_where( $this->table, [$field => $val] )->row();  
	}

	public function getWhereResult($field, $val)
	{
		return $this->db->get_where( $this->table, [$field => $val] )->result();  
	}

	public function addData($data)
	{
		return $this->db->insert( $this->table, $data );
	}

	public function addDataGetId($data)
	{
		$this->db->insert( $this->table, $data );
		return $this->db->insert_id();
	}

	public function editData($data, $field, $val)
	{
		return $this->db->update( $this->table, $data, [$field => $val] );
	}

	public function delete($field, $val)
	{ 
		$this->db->delete($this->table, [$field => $val]);
		return $this->db->affected_rows() > 0 ? TRUE : FALSE;
	}

	public function unlink($path)
	{ 
		if ( file_exists($path) )
		{
			unlink($path);
		}  
	}

	public function uploadImage( $upload_path = 'assets/images/portfolio' )
	{
		$config['upload_path']   = './' .$upload_path;
		$config['file_name'] = uniqid();
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 3000;

		$this->load->library('upload', $config);
		if ( $this->upload->do_upload('photo') )
		{
			return $this->upload->data('file_name');
		} 
		else
		{ 
			$this->session->set_flashdata('errorUpload', $this->upload->display_errors());
			return false;
		}
	}

	
	public function multiple_upload()
	{
		 	 
		$data = [];	 
		$countfiles = count( $_FILES['files']['name'] ); 
		for( $i=0; $i<$countfiles; $i++ )
		{
	
			if( !empty($_FILES['files']['name'][$i]) )
			{ 
				$_FILES['file']['name'] = $_FILES['files']['name'][$i];
				$_FILES['file']['type'] = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['files']['error'][$i];
				$_FILES['file']['size'] = $_FILES['files']['size'][$i];
				 
				$config['upload_path'] = './assets/images/portfolio'; 
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = '5000';
				$config['file_name'] = uniqid();
		 
				$this->load->library('upload',$config); 
		 
				if($this->upload->do_upload('file'))
				{ 
					$data[] = $this->upload->data('file_name');
				}
				else 
				{
					$this->session->set_flashdata('errorUpload', $this->upload->display_errors());
					return false;
				}
			}	
		}	  
		return $data;
	}
}
