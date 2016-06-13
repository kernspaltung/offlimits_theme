<?php
function url_meta_box_markup($object)
{


	wp_nonce_field( basename( __FILE__ ), "link-opcional-nonce" );

	?>
	<label for="link-opcional">Link Opcional</label>
	<input name="link-opcional" type="text" value="<?php echo get_post_meta($object->ID, "link-opcional", true); ?>">

	<?php
}

function add_url_meta_box()
{
	add_meta_box("aviso-meta-box", "Link Opcional", "url_meta_box_markup", array("aviso","post","page"), "side", "high", null);
}

add_action("add_meta_boxes", "add_url_meta_box");



function save_url_meta_box($post_id, $post, $update)
{
	if (!isset($_POST["link-opcional-nonce"]) || !wp_verify_nonce($_POST["link-opcional-nonce"], basename(__FILE__)))
	return $post_id;

	if(!current_user_can("edit_post", $post_id))
	return $post_id;

	if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
	return $post_id;

	$post_types = array("aviso", "post", "page" );

   // if( ! in_array( $post->post_type, $post_types ) )
	//   return $post_id;

	$meta_box_link_externo = "";

	if(isset($_POST["link-opcional"]))
	{
		$meta_box_link_externo = $_POST["link-opcional"];
	}
	update_post_meta($post_id, "link-opcional", $meta_box_link_externo );

}

add_action("save_post", "save_url_meta_box", 10, 3);
