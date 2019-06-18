<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Check_user
{
    public function getData()
    {
        $CI =& get_instance();
        $CI->load->model('Crud_model');  
        $id   = $CI->session->userdata('user_id');
        return $CI->Crud_model->setTable('profile')->getWhere( 'id', $id ); 
    }
}