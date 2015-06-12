<?php
header("Content-Type:text/html; charset=utf-8" );

/**
 * Class Layout
 *
 * Class permettant de charger le squelette du site avec différents container
 */
class Layout {
    function __construct() {

        $this->CI =& get_instance();

    }
    /**
     * Methode loader :
     *  - Charge le squelette du site
     *  - Charge le container
     *  - Test si mode edition de selection ou creation panier
     *  - Recupere la liste d'article a afficher dans la miniliste
     *
     * @param $container : container a charger
     * @param null $css :
     * @param null $js :
     */
    public function loader($container=NULL, $js=NULL, $css=NULL) {
        $data['container']=$container;
        $data['js']=$js;
        $data['css']=$css;
        $data['menuItems'] = array('Accueil', 'Contacts');
        $this->CI->load->view("template/base_page", $data);
    }
}
