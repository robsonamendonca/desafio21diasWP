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
// function create_custom_posttype() { 
//     register_post_type( 'produtos',
//     // CPT Options
//         array(
//             'labels' => array(
//                 'name' => __( 'Produtos' ),
//                 'singular_name' => __( 'Produto' )
//             ),
//             'public' => true,
//             'has_archive' => true,
//             'rewrite' => array('slug' => 'products'),
//             'show_in_rest' => true,
//             'menu_icon'           => 'dashicons-carrot',
//             'supports'              => array( 'title', 'editor','author','thumbnail','excerpt','page-attributes', 'post-formats'),
//             'taxonomies'            => array( 'category', 'post_tag' ),
//         )
//     );
// }
// // Hooking up our function to theme setup
// add_action( 'init', 'create_custom_posttype' );


require_once get_template_directory() . '/custom_post_type/curriculo.php';