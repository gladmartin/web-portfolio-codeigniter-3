<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model { 

    public function getInfo( $id )
    {
        $this->db->select('a.*, b.*')->join("portofolio b", "b.id_profile = a.id" ); 
        return $this->db->get_where( 'profile a', ['a.id' => $id] )->row();
    }

}
