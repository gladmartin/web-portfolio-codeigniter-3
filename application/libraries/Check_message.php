<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Check_message
{
    public $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Crud_model');
    }
    
    public function getAll()
    {                   
        return $this->CI->Crud_model->setTable('message')->getAll(); 
    }

    public function getCountUnread()
    {
        return count($this->CI->Crud_model->setTable('message')->getWhereResult('seen', 0)); 
    }
}