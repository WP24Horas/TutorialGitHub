<?php

/***
 * 
 * Este arquivo contém as funções administrativas
 * 
 */

//Se chamar diretamente, aborta
if (!defined('WPINC')) {
    die();
}

add_action('admin_menu','np_admin_menu_page');
function np_admin_menu_page(){

    add_menu_page(
        'Minha Página Admin',           //<title>
        'Novo Plugin',                  //Link do menu
        'manage_options',               //Capacidade de acesso
        'novo-plugin',                  //Slug
        'np_admin_page_content',        //Callback
        'dashicons-plugins-checked',    //Ícone
        1                               //prioridadade
    );

}

function np_admin_page_content(){
    
    echo '<div class="wrap">';

        echo '<h1>Novo Plugin - Configurações</h1>';

        echo '<form method="post" action="options.php">';

            settings_fields('np_settings'); //nome do grupo de configs
            do_settings_sections('novo-plugin'); //slug da pagina
            submit_button();
        
        echo '</form>';

    echo '</div>';

}

add_action('admin_init','np_register_setting');
function np_register_setting(){

    register_setting(
        'np_settings',          //nome grupo
        'np_home_text',         //nome da opção
        'sanitize_text_field'   //sanitization 
    );

    register_setting(
        'np_settings',          //nome grupo
        'np_home_logo',         //nome da opção
        'sanitize_text_field'   //sanitization 
    );

    add_settings_section(
        'np_settings_section_id',   //id da seção
        'Título da Seção',          //titulo
        '',                         //callback
        'novo-plugin'               //slug
    );

    add_settings_field(
        'np_home_text',
        'Home Text',
        'np_text_field_html',        //funcao que mostra o campo
        'novo-plugin',              //slug
        'np_settings_section_id',    //id seção
        array(
            'label_for' => 'np_home_text',
            'class'     => 'np_class'
        )
    );

    add_settings_field(
        'np_home_logo',
        'Logo',
        'np_logo_field_html',        //funcao que mostra o campo
        'novo-plugin',              //slug
        'np_settings_section_id',    //id seção
        array(
            'label_for' => 'np_home_logo',
            'class'     => 'np_class'
        )
    );

}

function np_text_field_html(){

    $text = get_option('np_home_text');

    printf('<input type="text" id="np_home_text" name="np_home_text" value="%s" />', esc_attr( $text ));
}

function np_logo_field_html(){

    $logo_id = get_option('np_home_logo');

    if($logo = wp_get_attachment_image_src($logo_id)){

        echo '<a href="#" class="np-upl"><img src="' . $logo[0] . '"></a>';
        echo '<a href="#" class="np-rmv">Remover Logo</a>';
        echo '<input type="hidden" name="np_home_logo" value="' . $logo_id . '">';

    }else{

        echo '<a href="#" class="np-upl">Upload Logo</a>';
        echo '<a href="#" class="np-rmv" style="display:none">Remover Logo</a>';
        echo '<input type="hidden" name="np_home_logo" value="">';

    }



    
}