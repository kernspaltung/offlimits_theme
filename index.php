<?php
/*
Template Name: Inicio
*/

get_header();



global $mainPages;
$mainPages = get_pages( array( "child_of" => get_the_id(), "parent" => get_the_id(), 'sort_column' => 'menu_order', 'sort' => 'desc' ));

get_template_part( 'offlimits_inicio' );


get_footer();
