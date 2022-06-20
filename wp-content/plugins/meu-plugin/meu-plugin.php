<?php

/**
 * Plugin Name:       Meu Plugin
 * Plugin URI:        https://wp24horas.com.br
 * Description:       Plugin para Testes no WordPress
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Asllan Maciel
 * Author URI:        https://asllanmaciel.com.br
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       meu-plugin
 */
 
 function conteudo_antes_depois($content){
     
     
     if(is_singular( 'post' )){
         
         setPostViews(get_the_ID());
         
         $count = getPostViews(get_the_ID());
         
         $antes = '<div>Aproveite esse conteúdo...</div>';
     
         $apos = '<div>Se você gostou desse conteúdo, deixe seu <a href="#comment">comentário abaixo</a>!</div>';
         
         $content_full = $antes.$content.$apos.'<br>'.$count;
         
         return $content_full;
             
     }else{
         return $content;
     }
     
     
     
 }
 
 add_filter('the_content','conteudo_antes_depois');
 
 
 function setPostViews($postID){
     
     $count_key = 'post_views_count';
     $count = get_post_meta($postID, $count_key, true);
     
     echo '>>>'.$count.'<<<';
     
     if($count==''){
         
         $count = 0;
         delete_post_meta($postID, $count_key);
         add_post_meta($postID, $count_key, $count);
         
     }else{
         
         $count++;
         update_post_meta($postID, $count_key, $count);
         
     }
     
 }
 
 
 remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
 

 function getPostViews($postID){
     
     $count_key = 'post_views_count';
     $count = get_post_meta($postID, $count_key, true);
     
     if($count==''){
         
         $count = 0;
         delete_post_meta($postID, $count_key);
         add_post_meta($postID, $count_key, $count);
         return $count . ' Views';
         
         
     }
         
      return $count . ' Views';
     
 }
 
 
 function posts_column_views($defaults){
     
     $defaults['post_views'] = __('Views');
     return $defaults;
     
 }
 add_filter('manage_posts_columns','posts_column_views');
 
 function posts_custom_column_views($column_name, $id){
     
     if($column_name === 'post_views'){
         echo getPostViews(get_the_ID());
     }
     
 }
 
 add_action('manage_posts_custom_column','posts_custom_column_views', 5, 2);
 
 
 

 
 
 
 
 