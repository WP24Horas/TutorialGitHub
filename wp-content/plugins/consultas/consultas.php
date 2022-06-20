<?php

/**
 * Plugin Name:       Consultas de BD
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Asllan Maciel
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
 
 function clientes( $atts ){
    
    global $wpdb;
    
    $sql = "SELECT * FROM {$wpdb->prefix}clientes";
    
    $clientes = $wpdb->get_results($sql);
    
    //var_dump($clientes);
    
    
    
    $html = '<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>';
        
        
        foreach($clientes as $key=>$value){
            
            $html.= '<tr>';
                $html.= '<td>'.$value->id.'</td>';
                $html.= '<td>'.$value->name.'</td>';
                $html.= '<td>'.$value->email.'</td>';
            $html.= '</tr>';
            
        }
        
       
     $html.= '</table>';
    
	return $html;
}
add_shortcode( 'clientes', 'clientes' );

function clientes_externos( $atts ){
    
    //global $wpdb;
    
    $ext_conn = new wpdb('m3cs162_testeadm','gRW#sZUOTB1d','m3cs162_wp_testes','localhost');
    
    $sql = "SELECT * FROM clientes";
    
    $clientes = $ext_conn->get_results($sql);
    
    
    $html = '<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Opções</th>
        </tr>';
        
        
        foreach($clientes as $key=>$value){
            
            $html.= '<tr data-id="'.$value->id.'">';
                $html.= '<td>'.$value->id.'</td>';
                $html.= '<td>'.$value->name.'</td>';
                $html.= '<td>'.$value->email.'</td>';
                $html.= '<td><a class="btn" href="#" id="'.$value->id.'">Remover</a></td>';
            $html.= '</tr>';
            
        }
        
       
     $html.= '</table>';
    
	return $html;
}
add_shortcode( 'clientes-externos', 'clientes_externos' );