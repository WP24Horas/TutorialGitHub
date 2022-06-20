<?php
add_action( 'wp_enqueue_scripts', 'TemaFilho_enqueue_child_theme_styles', PHP_INT_MAX);

function TemaFilho_enqueue_child_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri().'/style.css', array('parent-style') );
}


function insert_scripts(){
    
    if(is_page(2) || is_page(3) || is_page(7)){
    ?>
    
    
    
    <?php
    }
}

add_action('wp_head','insert_scripts');


 
function custom_script() {
    
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom-script.js', array(jquery) );
    
}
 
add_action( 'wp_enqueue_scripts', 'custom_script' );


?>