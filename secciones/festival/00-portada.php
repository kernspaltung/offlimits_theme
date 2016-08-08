<?php
$festival = get_page_by_title("Festival");
?>

<section id="festival-portada" class="small-12 columns p0 h_60vh h_sm_a">

   <header id="festival-header" class="small-12 columns p0 h_20vh h_sm_40vh rel mb_sm_4">

      <!-- festival-fondo header -->
      <div id="festival-header-fondo" class="columns imgLiquid imgLiquidFill h_100 w_100 absUpL z1" >
         <?php echo get_the_post_thumbnail( $festival -> ID, 'full' ); ?>
         <!-- <img class="" src="data:application/octet-stream;base64,PCFET0NUWVBFIEhUTUwgUFVCTElDICItLy9XM0MvL0RURCBIVE1MIDMuMiBGaW5hbC8vRU4iPgo8dGl0bGU+UmVkaXJlY3RpbmcuLi48L3RpdGxlPgo8aDE+UmVkaXJlY3RpbmcuLi48L2gxPgo8cD5Zb3Ugc2hvdWxkIGJlIHJlZGlyZWN0ZWQgYXV0b21hdGljYWxseSB0byB0YXJnZXQgVVJMOiA8YSBocmVmPSJodHRwOi8vZmFrZWltZy5wbC80MjB4MzgwLyI+aHR0cDovL2Zha2VpbWcucGwvNDIweDM4MC88L2E+LiBJZiBub3QgY2xpY2sgdGhlIGxpbmsu" alt="" /> -->
      </div>


      <!-- menu festival over header -->
      <div class="columns p0 absUpL z1 h_25vh h_sm_100">

         <div class="small-12 columns h_50">
            <div class="small-6 pt1 p0 fontRXXL">
               <h1 class="p0 txsh1">
                  <?php echo apply_filters( 'the_title', $festival->post_title); ?>
               </h1>
            </div>
         </div>

         <?php $secciones = array( /*'Lineup', */'Boletos', 'Puntos de Venta', 'Foro' ); ?>

         <nav id="festival-header-menu" class="menu horizontal small-12 columns h_50 p0">
            <ul class="small-12 columns p0 m0 h_100 fontRXL text-left no-bullet p3">
               <?php
               foreach ( $secciones as $seccion ) :

                  $link_seccion = "#festival-" . str_replace( " ", "_", strtolower( $seccion ) );

                  ?>
                  <li class=" h_50 f_l w_a end primario">
                     <a class="scrollLink p3 pt0 pl0 pr2 h_100  txsh1" data-target="<?php echo $link_seccion; ?>" href="<?php echo $link_seccion; ?>">
                        <div class="vcenter fontL font_sm_M acento">
                           <?php echo $seccion; ?>
                        </div>
                     </a>
                  </li>
               <?php endforeach; ?>
            </ul>
         </nav>
      </div>

   </header>

   <section id="header-portada-introduccion" class="large-10 large-offset-1 columns end h_55vh h_sm_70vh p5 rel ">

      <div id="festival-texto-intro" class="columns medium-6 h_100 p5">
         <div class="vcenter h_a">
            <?php echo apply_filters('the_content', get_page_by_title("Festival")->post_content); ?>
         </div>
      </div>


      <div id="festival-cartel" class="columns medium-6 h_100 p5">
         <div class="vcenter h_a">
            <?php
            $cartel = get_page_by_title("Cartel");
            $imagen_url = wp_get_attachment_image_src( get_post_thumbnail_id( $cartel->ID ), 'single-post-thumbnail' );
            echo '<a href="' . $imagen_url[0] . '" target="_blank">';
            echo get_the_post_thumbnail( $cartel->ID, 'medium');
            echo '</a>'
            ?>
         </div>
      </div>

   </section>

</section>
