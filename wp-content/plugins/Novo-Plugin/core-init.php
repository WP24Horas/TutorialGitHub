<?php

/***
 * 
 * Este arquivo inicializa todos os componentes do Plugin
 * 
 */

 //Se chamar diretamente, aborta
 if( ! defined('WPINC')){ die(); }

 define('NP_CORE_INC', dirname(__FILE__).'/inc/');
 define('NP_CORE_IMG', plugins_url('img/', __FILE__));
 define('NP_CORE_CSS', plugins_url('css/', __FILE__));
 define('NP_CORE_JS', plugins_url('js/', __FILE__));

/**
 * Registrando CSS (Frontend)
*/
function np_register_core_css(){
    wp_enqueue_style('np-core', NP_CORE_CSS . 'np-core.css', null, time(), 'all');
}
add_action('wp_enqueue_scripts','np_register_core_css');

/**
 * Registrando JS/jQuery (Frontend)
*/
function np_register_core_js(){
    wp_enqueue_script('np-core', NP_CORE_JS . 'np-core.js', 'jquery', time(), true);
}
add_action('wp_enqueue_scripts','np_register_core_js');

/**
 * Registrando JS/jQuery (Backend)
*/
function np_register_admin_scripts(){

    if(! did_action('wp_enqueue_media')){
        wp_enqueue_media();
    }

    wp_enqueue_script('np-admin-js', NP_CORE_JS . 'np-admin.js', 'jquery', time(), true);
    wp_enqueue_style('np-admin-css', NP_CORE_CSS . 'np-admin.css', null, time(), 'all');
}
add_action('admin_enqueue_scripts','np_register_admin_scripts');


/**
 * Includes
*/ 
if( file_exists( NP_CORE_INC . 'np-core-functions.php' ) ){
    require_once NP_CORE_INC . 'np-core-functions.php' ;
}
if( file_exists( NP_CORE_INC . 'np-admin-functions.php' ) ){
    require_once NP_CORE_INC . 'np-admin-functions.php' ;
}
if( file_exists( NP_CORE_INC . 'np-shortcodes.php' ) ){
    require_once NP_CORE_INC . 'np-shortcodes.php' ;
}



