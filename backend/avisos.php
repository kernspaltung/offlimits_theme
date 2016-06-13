<?php

add_action( 'init', 'registrar_cpt_avisos' );


function registrar_cpt_avisos() {
	$labels = array(
		'name'               => _x( 'Avisos', 'post type general name', 'offlimits-textdomain' ),
		'singular_name'      => _x( 'Aviso', 'post type singular name', 'offlimits-textdomain' ),
		'menu_name'          => _x( 'Avisos', 'admin menu', 'offlimits-textdomain' ),
		'name_admin_bar'     => _x( 'Aviso', 'add new on admin bar', 'offlimits-textdomain' ),
		'add_new'            => _x( 'Add New', 'aviso', 'offlimits-textdomain' ),
		'add_new_item'       => __( 'Add New Aviso', 'offlimits-textdomain' ),
		'new_item'           => __( 'New Aviso', 'offlimits-textdomain' ),
		'edit_item'          => __( 'Edit Aviso', 'offlimits-textdomain' ),
		'view_item'          => __( 'View Aviso', 'offlimits-textdomain' ),
		'all_items'          => __( 'All Avisos', 'offlimits-textdomain' ),
		'search_items'       => __( 'Search Avisos', 'offlimits-textdomain' ),
		'parent_item_colon'  => __( 'Parent Avisos:', 'offlimits-textdomain' ),
		'not_found'          => __( 'No avisos found.', 'offlimits-textdomain' ),
		'not_found_in_trash' => __( 'No avisos found in Trash.', 'offlimits-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
      'description'        => __( 'Description.', 'offlimits-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'aviso' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes'  )
	);

	register_post_type( 'aviso', $args );

}
