<?php

function redirect_to_checkout() {
    return WC()->cart->get_checkout_url();
}



add_action( 'wp_ajax_add_to_cart', 'add_to_cart' );
add_action( 'wp_ajax_nopriv_add_to_cart', 'add_to_cart' );

function add_to_cart() {

	$id = $_POST['id'];

	$add = WC()->cart->add_to_cart( $id );

	die( json_encode( $add ) );

}


add_action( 'wp_ajax_set_cart_item_quantity', 'set_cart_item_quantity' );
add_action( 'wp_ajax_nopriv_set_cart_item_quantity', 'set_cart_item_quantity' );

function set_cart_item_quantity() {

	$key = $_POST['key'];
	$quantity = $_POST['quantity'];

	$set = WC()->cart->set_quantity( $key, $quantity );


	die( json_encode( $quantity ) );

}

add_action( 'wp_ajax_clear_cart', 'clear_cart' );
add_action( 'wp_ajax_nopriv_clear_cart', 'clear_cart' );

function clear_cart() {

//$key = WC()->cart->find_product_in_cart( (int) $_POST['id'] );


	$empty = WC()->cart->empty_cart( true );

	die( json_encode( $empty ) );


}

?>
