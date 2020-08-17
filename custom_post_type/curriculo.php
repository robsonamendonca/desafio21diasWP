<?php

// Register Custom Post Type
function custom_post_type_curriculo() {

	$labels = array(
		'name'                  => _x( 'CV_Habilidades', 'CV_Habilidades', 'text_domain' ),
		'singular_name'         => _x( 'CV_Habilidade', 'Ultimo cv_habilidade', 'text_domain' ),
		'menu_name'             => __( 'CV_Habilidades', 'text_domain' ),
		'name_admin_bar'        => __( 'CV_Habilidade', 'text_domain' ),
		'archives'              => __( 'Item arquivos', 'text_domain' ),
		'attributes'            => __( 'Item atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'todos os itens', 'text_domain' ),
		'add_new_item'          => __( 'Adiconar novo item', 'text_domain' ),
		'add_new'               => __( 'Adicionar', 'text_domain' ),
		'new_item'              => __( 'Novo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Atualizar Item', 'text_domain' ),
		'view_item'             => __( 'Visualizar Item', 'text_domain' ),
		'view_items'            => __( 'Visualizar itens', 'text_domain' ),
		'search_items'          => __( 'Buscar item', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem em destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Edit imagem em destaque', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem em destaque', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagem em destaque', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir no item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Upload este item', 'text_domain' ),
		'items_list'            => __( 'Lista de itens', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de itens de navegação', 'text_domain' ),
		'filter_items_list'     => __( 'Lista de itens filtrar', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'CV_Habilidades', 'text_domain' ),
		'description'           => __( 'Descrição do post', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','author','thumbnail','excerpt','page-attributes', 'post-formats'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 4,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
        'can_export'            => true,
        'menu_icon'             => 'dashicons-id-alt',
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cv_habilidades', $args );

}
add_action( 'init', 'custom_post_type_curriculo', 0 );