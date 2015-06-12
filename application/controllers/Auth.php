<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 * @property Login_control $Login_control
 * @property Aauth $aauth Description
 * @version 1.0
 */
class Auth extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code

        $this->load->database();

    }

    function index()
    {
        $d['error'] = false;
        $this->load->library('form_validation');
        //chargement du helper form
        $this->load->helper('form');
        //$this->load->helper(array('form'));
        if ($this->aauth->is_loggedin()) {
            $this->twiggy->display();
            //var_dump($this->twiggy);
            //redirect('accueil');
        }else{

        // $this->load->view('login', $d);
        $this->twiggy->template('login')->display();
        }
    }


    function login()
    {

        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->load->helper('security');

        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');

        if($this->form_validation->run() == FALSE) {

            //Field validation failed.  User redirected to login page
            $this->twiggy->template('login')->set('error', false)->display();
        }else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if ($this->aauth->login($username, $password)) {
                //Auth validation failed.  User redirected to login page
                $this->twiggy->display();
            }else{
                //Auth validation succeed. Go to private area
                $this->twiggy->template('login')->set('error', true)->display();
            }

        }
    }

    function logout(){
        $this->aauth->logout();
        redirect('/');
    }
}
?>