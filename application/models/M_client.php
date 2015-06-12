<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_client extends CI_Model {
    public function getClient(){
        $query=$this->db->get('client');
        return $query->result();
    }
}