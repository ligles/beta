<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
class Twig
{

    private $CI;
    private $aAuth;



    /**
     * Constructor
     */
    public function __construct() {


        $this->CI = & get_instance();
        $this->CI->load->spark('Twiggy/0.8.5');
        $this->CI->load->library("Aauth");

        if (isConnected($this->CI->aauth)) {
            if (isAdmin($this->CI->aauth)) {
                $layout_data['menuItems'] = array('Accueil', 'Contacts', 'Admin');
            }else{

                $layout_data['menuItems'] = array('Accueil');

            }
            $this->CI->twiggy->set('data',$layout_data);

        }



    }




}