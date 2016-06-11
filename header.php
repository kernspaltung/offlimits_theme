<!doctype html>
<html class="no-js" <?php language_attributes(); ?> > <!-- lang="en"  -->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
  <!-- <link rel="stylesheet" href="css/app.css"> -->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>


  <?php wp_head(); ?>

</head>

<body>

  <!-- off-canvas menu solo para movil-->
  <div class="off-canvas-wrapper minH_100vh"><!-- cierra en el footer -->

    <div class="off-canvas-wrapper-inner " data-off-canvas-wrapper><!-- cierra en el footer -->

      <div class="off-canvas position-right align-center h_100vh" id="offCanvasRight" data-off-canvas data-position="right">


        <!-- menu movil aqui -->
        <div id="titulo_menu" class="small-12 columns h_10vh fontRXXL pointer" aria-label="Close menu" data-close="">

          <div class="small-9 columns text-center p2 pointer black vcenter" >Menú</div>

          <div class="small-3 columns p2 text-center vcenter" type="button">
            <span aria-hidden="true"><i class="fa fa-angle-right fontRXXXL"></i></span>
          </div>

        </div>

        <nav id="header-menu-escritorio" class="menu vertical h_90vh columns text-center">
          <ul class="w_100 h_100 no-bullet m0">
            <a href="#festival" class="columns h_14">
              <li class="vcenter">Festival</li>
            </a>
            <a href="#lineup" class="columns h_14">
              <li class="vcenter">LineUp</li>
            </a>
            <a href="#blog" class="columns h_14">
              <li class="vcenter">Blog</li>
            </a>
            <a href="#" class="columns h_14">
              <li class="vcenter">Información</li>
            </a>
            <a href="#" class="columns h_14">
              <li class="vcenter">Tienda</li>
            </a>
            <a href="#" class="columns h_14">
              <li class="vcenter">FAQ</li>
            </a>
            <a href="#" class="columns h_14">
              <li class="vcenter">Contacto</li>
            </a>
          </ul>
        </nav>


      </div>

      <!-- contenido del sitio -->
      <div class="off-canvas-content" data-off-canvas-content><!-- cierra en el footer -->

        <!-- header -->
        <header id="header" class="columns h_10vh fixed absUpL z1k black_bg">

          <!-- logo offlimits -->

          <div class="small-5 large-3 columns h_100 imgLiquid imgLiquidFill">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/1200x600.png" alt="" />
          </div>


          <!-- Este solo aparece en movil -->
          <div id="header-icono-menu-movil" class="small-7 hide-for-large columns p0 text-right p0 h_100 pointer" data-toggle="offCanvasRight">
            <button type="button" class="button hollow boton-menu-movil vcenter mb0 p0 h_100" ><i class="fa fa-bars fontRXXXL"></i></button>
            <!-- <a class="button hollow boton-menu-movil vcenter mb0 p0 h_100" data-toggle="offCanvasRight"><i class="fa fa-bars fontRXXXL"></i></a> -->
          </div>

          <!-- header menu large y large desktop -->
          <?php wp_nav_menu( array( 'theme_location' => 'menu-principal', 'container' => 'nav', '' ) ); ?>

        </header>


        <!-- main -->
        <main id="main" class="small-12 columns m0 pl0 pr0 pt_10vh">
           <header id="cabecera_seccion" class="columns p0 h_100">
              <?php get_template_part('secciones/compartidas/header_seccion'); ?>
           </header>
           <div id="contenido-general" class="columns ha">
              <div id="area_contenidos" class="small-12 small-pull-12 large-9 p0 columns ha pb5">
