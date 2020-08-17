<?php
/**
 * Tema construido no Desafio21Dias
 *
 * @link http://torneseumprogramador.com.br
 *
 * @package WordPress
 * @subpackage Desafio21Dias
 * @since Desafio21Dias
 */

add_theme_support( 'post-thumbnails' );
//add_post_type_support( 'product','thumbnail' );

// Register Custom Post Type
require_once get_template_directory() . '/custom_post_type/produtos.php';
// Curriculo
require_once get_template_directory() . '/custom_post_type/curriculo.php';

//escolher menu top admin na visualização
add_filter('show_admin_bar','admin_bar_custom');
function admin_bar_custom(){
    return false;
}
  