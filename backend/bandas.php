<?php

add_action( 'init', 'registrar_cpt_bandas' );


function registrar_cpt_bandas() {
	$labels = array(
		'name'               => _x( 'Bandas', 'post type general name', 'offlimits-textdomain' ),
		'singular_name'      => _x( 'Banda', 'post type singular name', 'offlimits-textdomain' ),
		'menu_name'          => _x( 'Bandas', 'admin menu', 'offlimits-textdomain' ),
		'name_admin_bar'     => _x( 'Banda', 'add new on admin bar', 'offlimits-textdomain' ),
		'add_new'            => _x( 'Add New', 'banda', 'offlimits-textdomain' ),
		'add_new_item'       => __( 'Add New Banda', 'offlimits-textdomain' ),
		'new_item'           => __( 'New Banda', 'offlimits-textdomain' ),
		'edit_item'          => __( 'Edit Banda', 'offlimits-textdomain' ),
		'view_item'          => __( 'View Banda', 'offlimits-textdomain' ),
		'all_items'          => __( 'All Bandas', 'offlimits-textdomain' ),
		'search_items'       => __( 'Search Bandas', 'offlimits-textdomain' ),
		'parent_item_colon'  => __( 'Parent Bandas:', 'offlimits-textdomain' ),
		'not_found'          => __( 'No bandas found.', 'offlimits-textdomain' ),
		'not_found_in_trash' => __( 'No bandas found in Trash.', 'offlimits-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'offlimits-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'banda' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'banda', $args );
}
