<?php
    // ontwikkel instellingen
    // Error reporting voor debug
    ini_set("display_errors",1);
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    
    // Ajax debugging: kan via xajax_debug in database
    //define('SITE_AJAX_DEBUG', true);

    // site params
    define('SITE_URL', 'http://localhost/gino-pam/pam-public/');
?>