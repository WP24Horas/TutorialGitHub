<?php
/**
 * Plugin Name: Novo Plugin
 * Plugin URI: https://wp24horas.com.br/plugins/novo-plugin
 * Description: Plugin de Funcionalidades para WP
 * Version: 2.1.4
 * Author: Asllan Maciel
 * Author URI: https://asllanmaciel.com.br
 * Text Domain: np
 */

 //Se chamar diretamente, aborta
 if( ! defined('WPINC')){ die(); }

 if( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ){
    require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
 }