<?php
$avisos_pagina = get_page_by_title("Avisos");

$avisos = get_posts( array( 'posts_per_page' => 3, 'post_type' => 'aviso', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
?>

<div id="avisos-destacados" class="hide-for-small-only hide-for-medium-only large-3 columns p0" data-sticky-container>

   <div id="avisos-destacados-sticky" class="sticky" data-sticky data-margin-top="5" data-anchor="area_contenidos" data-sticky-on="large">


      <!-- noticia destacada principal -->
         <div id="avisos-destacados-header" class="large-9 columns p2 m0 h_10vh fontRXL text-left show-for-large">
            <div class="vcenter white">
               <h1>
                  Avisos
               </h1>
            </div>
         </div>
         <div id="avisos-destacados-header" class="large-3 columns p2 m0 h_10vh fontRXL bold text-center show-for-large">
            <div class="vcenter">
               <i class="fa fa-angle-right"></i>
            </div>
         </div>

      <!-- temrina header destacados sticky -->

      <?php

      $link = obtener_link( $avisos[0]-> ID );

      ?>

      <a href="<?php echo $link; ?>" <?php echo $target_blank; ?>>
         <article id="avisos-destacados-principal" class="small-12 columns p2 m0 h_35vh h_sm_15vh h_md_15vh  white mb1">

            <div class="small-7 small-push-5 large-12 large-push-0 columns p0 ha h_sm_100 h_md_100">
               <div id="avisos-destacados-principal-header" class="small-8 columns ha h_sm_100 h_md_100 p2 m0 fontRL">
                  <div class="vcenter p0">
                     <h6 class="p0 m0">
                        <?php echo apply_filters('the_title',$avisos[0]->post_title); ?>
                     </h6>
                  </div>
               </div>
               <div id="avisos-destacados-principal-header-fecha" class="small-4 columns text-center fontS show-for-large-only show-for-xlarge-only">
                  <?php echo get_the_date('d\.m\.Y', $avisos[0]->ID ); ?>
               </div>
            </div>


            <div class="small-5 small-pull-7 large-12 large-pull-0 columns p0 m0 h_50 h_sm_100 h_md_100">
               <div id="avisos-destacados-thumb" class="w_100 h_100 imgLiquid imgLiquidNoFill cursor-pointer p0">
                  <?php echo get_the_post_thumbnail($avisos[0]->ID,'thumb'); ?>
               </div>
            </div>

            <div class="large-9 columns p2 pl0 m0 fontRM show-for-large">
                  <?php echo apply_filters('the_excerpt',$avisos[0]->post_excerpt); ?>
            </div>


            <div class="large-3 columns p3 pl0 pr0 bold text-right show-for-large">
               <div class="vcenter">
                  <span class="pr1 fontXS">Ir</span>
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
            <article id="avisos-destacados-secundario_"<?php echo $i+1; ?> class="large-6 columns p0 m0 white h_10vh mb1" <?php echo $target_blank; ?>>


               <div class="small-5 large-12 columns p0 m0 h_100">
                  <div id="avisos-destacados-thumb" class="columns imgLiquid imgLiquidNoFill cursor-pointer h_100">
                     <?php echo get_the_post_thumbnail($avisos[$i+1]->ID,'thumb'); ?>
                  </div>
               </div>

               <div id="avisos-destacados-principal-header" class="small-7 large-12 columns p2 m0 fontRM h_100 ">
                  <div class="vcenter p0">
                     <h6>
                        <?php echo apply_filters('the_title',$avisos[$i+1]->post_title); ?>
                     </h6>
                  </div>
                  <div id="avisos-destacados-principal-header-fecha" class="large-12 columns p1 fontRS show-for-large-only show-for-xlarge-only">
                     <?php echo date_i18n('d\.m\.Y', strtotime(get_the_date( array('post' => $avisos[$i+1]->ID )) ) ); ?>
                  </div>

               </div>

               <!-- <div class="large-12 columns p2 m0 ha fontRXXS">
               <div class="vcenter">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quaerat, sunt dignissimos.
            </div>
         </div> -->

         <div class="large-12 columns p2 m0 fontRM bold text-right show-for-large-only show-for-xlarge-only">
            <div class="vcenter">
               <span class="pr1 fontXS">Ir</span><i class="fa fa-plus"></i>
            </div>
         </div>
      </article>
   </a> <!-- termina primer aviso  -->

<?php endfor; ?>

</div><!-- Avisos sticky -->

</div>
