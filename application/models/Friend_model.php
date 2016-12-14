<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Friend_model extends CI_Model {

    public function __construct()
    {
        
    }

    public function get_friends(){
    	$query = $this->db->get('friend');
    	return $query->result_array();
    }
}