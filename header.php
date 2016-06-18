<!doctype html>
<html class="no-js" <?php language_attributes(); ?> > <!-- lang="en"  -->
<head>

   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title><?php bloginfo( 'name' ); ?> - <?php the_title(); ?></title>
   <!-- <link rel="stylesheet" href="css/app.css"> -->
   <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

   <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>




         <?php

         $name = get_bloginfo('name');

         $twitter_user = '@offlimitsmx';

         if( is_single() ) {
            $name = $name . ': ' . get_the_title();
            $description = apply_filters( 'the_excerpt', get_the_excerpt() );
            $url = get_the_permalink( get_the_ID() );
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true);

         } else {
            $name = $name . ': ' . get_the_title();

            $description = get_bloginfo('description');
            $url = get_bloginfo('url');

            $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_page_by_title("Inicio")->ID), 'thumbnail_size' );
         }

         $image = $thumb_url[0];


         $date = '';
         $time = '';

         ?>

         <title><?php echo $name; ?></title>


         <?php //include_once 'favicons.php'; ?>


         <meta name="description" content="<?php echo $description; ?>" />

         <!-- Schema.org markup for Google+ -->
         <meta itemprop="name" content="<?php echo $name; ?>">
         <meta itemprop="description" content="<?php echo $description; ?>">
         <meta itemprop="image" content="<?php echo $image; ?>">

         <!-- Twitter Card data -->
         <meta name="twitter:card" content="<?php echo $image; ?>">
         <meta name="twitter:site" content="<?php echo $twitter_user; ?>">
         <meta name="twitter:title" content="<?php echo $name; ?>">
         <meta name="twitter:description" content="<?php echo $description; ?>">
         <!-- <meta name="twitter:creator" content="@author_handle"> -->
         <!-- Twitter summary card with large image must be at least 280x150px -->
         <meta name="twitter:image:src" content="<?php echo $image; ?>">

         <!-- Open Graph data -->
         <meta property="og:title" content="<?php echo $name; ?>"/>
         <meta property="og:type" content="article" />
         <meta property="og:url" content="<?php echo $url; ?>" />
         <meta property="og:image" content="<?php echo $image; ?>" />
         <meta property="og:description" content="<?php echo $description; ?>" />
         <meta property="og:site_name" content="<?php echo $name; ?>" />
         <meta property="article:published_time" content="<?php echo $date; ?>" />
         <meta property="article:modified_time" content="<?php echo $time; ?>" />
         <!-- <meta property="article:section" content="Artget_numberic ID" /> -->

         <?php
         wp_head();
         ?>

         <script>
           (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
           m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
           })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

           ga('create', 'UA-76176145-1', 'auto');
           ga('send', 'pageview');

         </script>


</head>

<body>

   <!-- off-canvas menu solo para movil-->
   <div class="off-canvas-wrapper"><!-- cierra en el footer -->

      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper><!-- cierra en el footer -->

         <div class="off-canvas position-right align-center h_100vh neutral_oscuro2_bg white" id="offCanvasRight" data-off-canvas data-position="right">


            <!-- menu movil aqui -->
            <div id="titulo_menu" class="small-12 columns h_10vh fontRXXL pointer mb2" aria-label="Cerrar menú" data-close="">

               <div class="small-9 columns text-center p2 pointer white vcenter" >
                  <h1>
                     Menú
                  </h1>
               </div>

               <div class="small-3 columns p2 text-center vcenter" type="button">
                  <span aria-hidden="true"><i class="fa fa-close fontRXXXL"></i></span>
               </div>

            </div>

            <?php wp_nav_menu( array( 'theme_location' => 'menu-principal', 'container' => 'nav', '' ) ); ?>

         </div>

         <!-- contenido del sitio -->
         <div class="off-canvas-content" data-off-canvas-content><!-- cierra en el footer -->

            <!-- header -->
            <header id="header" class="columns h_10vh fixed absUpL z1k black_bg">

               <!-- logo offlimits -->
               <a href="<?php echo site_url(); ?>" class="small-7 large-3 columns h_100 p2">

                  <div class="h_100 imgLiquid imgLiquidNoFill">
                     <img src="<?php echo get_stylesheet_directory_uri() ?>/img/LogoDT.png" alt="" />
                  </div>

               </a>

               <!-- Este solo aparece en movil -->
               <div id="header-icono-menu-movil" class="small-5 hide-for-large columns p0 text-right p0 h_100 pointer" data-toggle="offCanvasRight">
                  <div class="button black_bg boton-menu-movil vcenter mb0 p0 h_a w_a pr1 black_hover_bd" >
                     <i class="fa fa-bars fontRXXXL text-right"></i>
                  </div>
                  <!-- <a class="button hollow boton-menu-movil vcenter mb0 p0 h_100" data-toggle="offCanvasRight"><i class="fa fa-bars fontRXXXL"></i></a> -->
               </div>


            </header>


            <!-- main -->
            <main id="main" class="small-12 columns m0 pl0 pr0 pt_10vh">
               <?php if( is_page('Festival') || get_page_template_slug() == "offlimits_festival.php" || is_page('Inicio') ) : ?>
                  <header id="cabecera_seccion" class="columns p0 h_100 h_sm_a mb2">
                     <?php get_template_part('secciones/compartidas/header_seccion'); ?>
                  </header>
               <?php endif; ?>

               <div id="contenido-general" class="columns ha p0">
                  <div id="area_contenidos" class="small-12 small-pull-12 large-<?php echo ! is_page('Festival') ? 9 : 12; ?> p0 columns ha pb5">
