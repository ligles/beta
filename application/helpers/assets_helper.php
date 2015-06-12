<?php


/**
 * Retourne String du chemin CSS
 */
if ( ! function_exists('css_url')){
    function css_url($nom){
        if(substr($nom, -4)==".css") {
            return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/css/'.$nom.'"/>';
        }
        else {
            return '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/css/'.$nom.'.css"/>';
        }
    }
}

/**
 * Retourne String du chemin JS
 */
if ( ! function_exists('js_url')){
    function js_url($nom){
        if(substr($nom, -3)==".js"){
            return '<script type="text/javascript" src="'.base_url() . 'assets/js/' . $nom.'"></script>';
        }
        else return '<script type="text/javascript" src="'.base_url() . 'assets/js/' . $nom.'.js"></script> ';
    }
}

if ( ! function_exists('bootstrapPath')){
    function bootstrapPath($file){
        return base_url('assets/bootstrap/'.$file);
    }
}

/**
 * Retourne String du chemin IMG
 */
if ( ! function_exists('img_url')){
    function img_url($nom){
        return base_url().'assets/img/'.$nom;
    }
}