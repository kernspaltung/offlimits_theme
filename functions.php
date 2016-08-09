<?php

#el topbar de wp fuera
add_filter( 'show_admin_bar', '__return_false' );

include_once 'backend/bandas.php';
include_once 'backend/avisos.php';
include_once 'backend/url_opcional.php';

include_once 'functions_ajax.php';


add_theme_support('post-thumbnails');

// estilos
function ol_enqueue_styles() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  wp_register_style( 'wp-style', get_stylesheet_directory_uri() . '/style.css', array(), '', 'all' );
  wp_enqueue_style( 'wp-style' );
}
add_action( 'wp_enqueue_scripts', 'ol_enqueue_styles' );

// scripts
function ol_enqueue_scripts() {
  wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick.css' );
  wp_enqueue_style( 'slick-theme-css', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css' );
  wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css?family=Permanent+Marker|Special+Elite|Averia+Sans+Libre|Open+Sans");
  wp_enqueue_style( 'offlimits-css', get_stylesheet_directory_uri() . '/css/app.css' );

  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.js',array(),'2', false );
  wp_enqueue_script( 'whatinput-js', get_stylesheet_directory_uri() . '/bower_components/what-input/what-input.js',array('jquery'),'0.99', true );
  wp_enqueue_script( 'foundation-js', get_stylesheet_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js',array(),'0.99', true );
  wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/js/app.js',array('foundation-js') );
  wp_enqueue_script( 'img-js', get_stylesheet_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid.js',array(),'0.99', true );
  wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick.js',array(),'0.99', true );
  wp_enqueue_script( 'front-js', get_stylesheet_directory_uri() . '/js/frontendutils.js',array(),'0.1', true );
  wp_enqueue_script( 'offlimits-js', get_stylesheet_directory_uri() . '/js/offlimits.js',array('jquery'),'0.01', true );

  wp_localize_script( 'offlimits-js', 'ol_ajax',
      array(
           'ajaxurl' => admin_url( 'admin-ajax.php' ),
      )
  );

  if( is_page("Inicio") )
   wp_enqueue_script( 'tiempo_faltante', get_stylesheet_directory_uri() . '/js/tiempo_faltante.js',array('offlimits-js'),'0.01', true );

  // para el mapa cambiar api key
   wp_enqueue_script( 'maps-js', 'https://maps.googleapis.com/maps/api/js', array(), '1', false );
   wp_enqueue_script( 'maps-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBpQxyk-9VglJzuX10s8PFkufhjRPpsqy8&callback=initMap', array(), '1', true );

  //
  if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'ol_enqueue_scripts' );




// Menú


function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'small-12 large-3 columns end color_principal uppercase fontL font2 text-center p2';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);
function registrar_menus() {
  register_nav_menu('menu-principal',__( 'Menú principal' ));
}
add_action( 'init', 'registrar_menus' );



add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}


function obtener_link($ID) {
   $url_opcional = get_post_meta( $ID, 'link-opcional', true );

   if( ! $url_opcional )
      $url = get_the_permalink( $ID );
   else
      $url = $url_opcional;

   if ( strpos( $url, 'http://' ) !== false ) {
      $target_blank = ' target="blank"';
   } else {
      $target_blank = 0;
      $url = site_url() . "/" . $url;
   }

   return $url;
}




// woocommerce supoprt
// remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
// remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//
//
// add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
// add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
//
// function my_theme_wrapper_start() {
//   echo '<section id="main">';
// }
//
// function my_theme_wrapper_end() {
//   echo '</section>';
// }

add_action( 'init', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' ); }



add_filter('woocommerce_enable_order_notes_field', '__return_false');
