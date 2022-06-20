<?php

/***
 * 
 * Este arquivo contém os shortcodes
 * 
 */

//Se chamar diretamente, aborta
if (!defined('WPINC')) {
    die();
}

function foobar_func($atts)
{
    return "foo and bar";
}

function meu_ig($atts)
{
    return "<a href='https://instagram.com/asllan.maciel' target='_blank'>Siga-me no Instagram</a>";
}

// [bartag foo="foo-value"]
function bartag_func($atts)
{
    $a = shortcode_atts(array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts);

    return "foo = {$a['foo']}";
}

function botao_site($atts)
{
    $a = shortcode_atts(array(
        'cor' => 'green',
    ), $atts);

    return "<a href='https://asllanmaciel.com.br' target='_blank' class='btn' style='color:#fff; background-color:{$a['cor']}'>Meu Site</a>";
}

function video_yt($atts)
{
    $a = shortcode_atts(array(
        'id' => 'VDadtQaAatI',
    ), $atts);

    $html = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$a['id'].'" title="YouTube video player" frameborder="0" allowfullscreen></iframe>';

    return $html;
}

function caption_shortcode($atts, $content = null)
{

    $text = get_option('np_home_text');

    return '<span class="caption">' . $content . '--' . $text . '</span>';
}

function cta($atts, $content = null)
{
    $a = shortcode_atts(array(
        'background' => '',
        'link' => '',
    ), $atts);

    return "<a href='{$a['link']}' target='_blank' class='cta' style='color:#fff; background-color:{$a['background']}'>" . $content . "</a>";

}


/**
 * Registro de todos os shortcodes
 */

function np_register_shortcodes()
{
    //Shortcodes registrados
    add_shortcode('foobar', 'foobar_func');
    add_shortcode('bartag', 'bartag_func');
    add_shortcode('caption', 'caption_shortcode');

    add_shortcode('meu-ig', 'meu_ig');
    add_shortcode('meu-site', 'botao_site');
    add_shortcode('yt-video', 'video_yt');
    add_shortcode('cta', 'cta');
}
add_action('init', 'np_register_shortcodes');
