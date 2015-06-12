<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 12/06/15
 * Time: 15:21
 */



if(!function_exists('isConnected')) {
    function isConnected($aAuth)
    {
        return $aAuth->is_loggedin();
    }
}

if(!function_exists('isAdmin')) {

    function isAdmin($aAuth)
    {
        return $aAuth->is_member('Admin');
    }
}



if(!function_exists('getRights')) {

    function getRights($aAuth)
    {


        return $aAuth->is_member('Admin');
    }
}