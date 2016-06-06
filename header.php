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
        <div id="titulo_menu" class="small-12 columns h_10vh fontRL">

          <div class="small-9 columns text-center p2">Menú</div>

          <div class="small-3 columns p2 text-center" aria-label="Close menu" type="button" data-close="">
            <span aria-hidden="true"><i class="fa fa-angle-right fontRXXL pointer"></i></span>
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
        <header id="header" class="columns h_10vh" >

          <!-- logo offlimits -->

          <div class="small-5 large-3 columns h_100 imgLiquid imgLiquidFill">
            <img src="http://fakeimg.pl/250x100/" alt="" />
          </div>


          <!-- Este solo aparece en movil -->
          <div id="header-icono-menu-movil" class="small-7 hide-for-large columns p0 text-right p0 h_100">
            <button type="button" class="button hollow boton-menu-movil vcenter mb0 p0 h_100" data-toggle="offCanvasRight"><i class="fa fa-bars fontRXXL"></i></button>
            <!-- <a class="button hollow boton-menu-movil vcenter mb0 p0 h_100" data-toggle="offCanvasRight"><i class="fa fa-bars fontRXXL"></i></a> -->
          </div>

          <!-- header menu large y large desktop -->
          <nav id="header-menu-escritorio" class="menu large-9 show-for-large columns align-right pr0 vcenter">
            <ul class="large-12 h_100 no-bullet text-center">
              <a href="#festival" class="large-2 columns p2 h_100">
                <li>Festival</li>
              </a>
              <a href="#lineup" class="large-2 columns p2 h_100">
                <li>LineUp</li>
              </a>
              <a href="#blog" class="large-1 columns p2 h_100">
                <li>Blog</li>
              </a>
              <a href="#" class="large-2 columns p2 h_100">
                <li>Información</li>
              </a>
              <a href="#" class="large-2 columns p2 h_100">
                <li>Tienda</li>
              </a>
              <a href="#" class="large-1 columns p2 h_100">
                <li>FAQ</li>
              </a>
              <a href="#" class="large-2 columns p2 h_100">
                <li>Contacto</li>
              </a>
            </ul>
          </nav>

        </header>


        <!-- main -->
        <main id="main" class="small-12 columns h_80vh h_md_70vh m0 p0 scrollH">
