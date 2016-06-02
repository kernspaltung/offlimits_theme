<?php
// estilos
function ol_enqueue_styles() {
   global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
   wp_register_style( 'mkq-style', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
   wp_enqueue_style( 'mkq-style' );
}
add_action( 'wp_enqueue_scripts', 'ol_enqueue_styles' );

// scripts
function ol_enqueue_scripts() {
   wp_enqueue_style( 'mkq', get_stylesheet_directory_uri() . '/assets/css/app.css' );
   wp_enqueue_script( 'all-js', get_stylesheet_directory_uri() . '/assets/js/all.js',array(),'0.99', true );
  //  wp_enqueue_script( 'maps-js', 'https://maps.googleapis.com/maps/api/js?callback=initMap', array(), '1', false );
   wp_enqueue_script( 'maps-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBpQxyk-9VglJzuX10s8PFkufhjRPpsqy8&callback=initMap', array(), '1', true );
   if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
   }
}
add_action( 'wp_enqueue_scripts', 'ol_enqueue_scripts' );
