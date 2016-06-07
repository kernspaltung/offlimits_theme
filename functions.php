<?php

#el topbar de wp fuera
add_filter( 'show_admin_bar', '__return_false' );


// estilos
function ol_enqueue_styles() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  wp_register_style( 'wp-style', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
  wp_enqueue_style( 'wp-style' );
}
add_action( 'wp_enqueue_scripts', 'ol_enqueue_styles' );

// scripts
function ol_enqueue_scripts() {
  wp_enqueue_style( 'offlimits-css', get_stylesheet_directory_uri() . '/css/app.css' );
  // wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.js',array(),'2', false );
  wp_enqueue_script( 'whatinput-js', get_stylesheet_directory_uri() . '/bower_components/what-input/what-input.js',array('jquery'),'0.99', true );
  wp_enqueue_script( 'foundation-js', get_stylesheet_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js',array(),'0.99', true );
  wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/js/app.js',array(),'1', true );
  wp_enqueue_script( 'img-js', get_stylesheet_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid.js',array(),'0.99', true );
  wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick.js',array(),'0.99', true );
  wp_enqueue_script( 'front-js', get_stylesheet_directory_uri() . '/js/frontendutils.js',array(),'0.1', true );
  wp_enqueue_script( 'offlimits-js', get_stylesheet_directory_uri() . '/js/offlimits.js',array('jquery'),'0.01', true );

  // para el mapa cambiar api key
   wp_enqueue_script( 'maps-js', 'https://maps.googleapis.com/maps/api/js', array(), '1', false );
  //  wp_enqueue_script( 'maps-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBpQxyk-9VglJzuX10s8PFkufhjRPpsqy8&callback=initMap', array(), '1', true );

  //
  if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'ol_enqueue_scripts' );
