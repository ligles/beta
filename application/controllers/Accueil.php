<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends MY_Controller{
    protected $groupsAllowed = array('default');

    public function index() {
        $container=$this->load->view("container", '', true);
        $this->layout->loader($container);
    }
}