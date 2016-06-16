<?php
$avisos_pagina = get_page_by_title("Avisos");

$avisos = get_posts( array( 'posts_per_page' => 3, 'post_type' => 'aviso', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
?>

<div id="avisos-destacados" class="small-12 small-pull-12 large-3 columns p0" data-sticky-container>

   <div id="avisos-destacados-sticky" class="sticky" data-sticky data-margin-top="5" data-anchor="area_contenidos" data-sticky-on="large">


      <!-- noticia destacada principal -->
      <a href="<?php echo get_the_permalink( $avisos_pagina -> ID ); ?>">
         <div id="avisos-destacados-header" class="large-9 columns p2 m0 h_10vh fontRXL text-left">
            <div class="vcenter white">
               <h1>
                  Avisos
               </h1>
            </div>
         </div>
         <div id="avisos-destacados-header" class="large-3 columns p2 m0 h_10vh fontRXL bold text-center">
            <div class="vcenter">
               <i class="fa fa-angle-right"></i>
            </div>
         </div>
      </a> <!-- temrina header destacados sticky -->

      <?php

      $link = obtener_link( $avisos[0]-> ID );

      ?>

      <a href="<?php echo $link; ?>" <?php echo $target_blank; ?>>
         <article id="avisos-destacados-principal" class="large-12 columns p0 m0 min_20vh white">

            <div id="avisos-destacados-principal-header" class="large-8 columns p1 m0 ha fontRL">
               <div class="vcenter ">
                  <?php echo apply_filters('the_title',$avisos[0]->post_title); ?>
               </div>
            </div>
            <div id="avisos-destacados-principal-header-fecha" class="large-4 columns text-center pt1 fontRM">
               <?php echo get_the_date('d\.m\.Y', $avisos[0]->ID ); ?>
            </div>

            <div class="small-12 columns p0 m0 h_22vh">
               <div id="avisos-destacados-thumb" class="columns h_100 imgLiquid imgLiquidNoFill cursor-pointer">
                  <?php echo get_the_post_thumbnail($avisos[0]->ID,'thumb'); ?>
               </div>

            </div>

            <div class="large-10 columns p2 m0 h_10vh fontRM">
               <div class="vcenter">
                  <?php echo apply_filters('the_excerpt',$avisos[0]->post_excerpt); ?>
               </div>
            </div>

            <div class="large-2 columns p2 m0 minH_10vh fontRM bold text-center">
               <div class="vcenter">
                  <i class="fa fa-plus"></i>
               </div>
            </div>

         </article>
      </a>



      <?php for ($i=0; $i < 2; $i++) : ?>

         <?php
         $link_opcional = 0;
         $link_opcional = get_post_meta( $avisos[$i+1]->ID, 'link-opcional', true );

         if( ! $link_opcional )
            $link = get_the_permalink( $avisos[$i+1]->ID );
         else
            $link = $link_opcional;


         $target_blank = 0;

         if ( strpos( $link, 'http://' ) !== false ) {
            $target_blank = ' target="blank"';
         } else {
            $link = site_url() . "/" . $link;
         }

         ?>

         <a href="<?php echo $link; ?>" <?php echo $target_blank; ?>>
            <article id="avisos-destacados-secundario_"<?php echo $i+1; ?> class="large-6 columns p0 m0 white" <?php echo $target_blank; ?>>


               <div class="small-12 columns p0 m0 h_12vh">
                  <div id="avisos-destacados-thumb" class="columns h_100 imgLiquid imgLiquidNoFill cursor-pointer">
                     <?php echo get_the_post_thumbnail($avisos[$i+1]->ID,'thumb'); ?>
                  </div>
               </div>

               <div id="avisos-destacados-principal-header" class="small-12 columns p1 m0 ha fontRM">
                  <div class="vcenter">
                     <?php echo apply_filters('the_title',$avisos[$i+1]->post_title); ?>
                  </div>
                  <div id="avisos-destacados-principal-header-fecha" class="large-12 columns p1 pl2 fontRS">
                     <?php echo date_i18n('d\.m\.Y', strtotime(get_the_date( array('post' => $avisos[$i+1]->ID )) ) ); ?>
                  </div>

               </div>

               <!-- <div class="large-12 columns p2 m0 ha fontRXXS">
               <div class="vcenter">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quaerat, sunt dignissimos.
            </div>
         </div> -->

         <div class="large-12 columns p2 m0 fontRM bold text-center">
            <div class="vcenter">
               <i class="fa fa-plus"></i>
            </div>
         </div>
      </article>
   </a> <!-- termina primer aviso  -->

<?php endfor; ?>

</div><!-- Avisos sticky -->

</div>
