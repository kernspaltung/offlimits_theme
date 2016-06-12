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




function aviso_url_meta_box_markup($object)
{


	wp_nonce_field( basename( __FILE__ ), "link-opcional-nonce" );

	?>
	<label for="link-opcional">Link Opcional</label>
	<input name="link-opcional" type="text" value="<?php echo get_post_meta($object->ID, "link-opcional", true); ?>">

	<?php
}

function add_aviso_url_meta_box()
{
	add_meta_box("aviso-meta-box", "Link Opcional", "aviso_url_meta_box_markup", "aviso", "side", "high", null);
}

add_action("add_meta_boxes", "add_aviso_url_meta_box");



function save_aviso_url_meta_box($post_id, $post, $update)
{
	if (!isset($_POST["link-opcional-nonce"]) || !wp_verify_nonce($_POST["link-opcional-nonce"], basename(__FILE__)))
	return $post_id;

	if(!current_user_can("edit_post", $post_id))
	return $post_id;

	if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
	return $post_id;

	$slug = "aviso";
	if($slug != $post->post_type)
	return $post_id;

	$meta_box_link_externo = "";

	if(isset($_POST["link-opcional"]))
	{
		$meta_box_link_externo = $_POST["link-opcional"];
	}
	update_post_meta($post_id, "link-opcional", $meta_box_link_externo );

}

add_action("save_post", "save_aviso_url_meta_box", 10, 3);
