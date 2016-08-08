<?php

   $festival = get_page_by_title("Festival");
   $link_lineup = get_the_permalink( get_page_by_title("Bandas") -> ID );

?>


<div id="lineup" class="small-12 columns p0 h_100">

   <!-- header secciones home -->
   <div id="lineup-header" class="small-12 columns p0 h_10vh">

      <a href="<?php echo $link_lineup; ?>">

         <div class="small-9 columns fontRXL h_100">
            <div class="vcenter">
               <h1 class="white">
                  Bandas
               </h1>
            </div>
         </div>

         <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
            <div class="vcenter">
               <i class="fa fa-angle-right"></i>
            </div>
         </div>

      </a>

   </div>

   <div id="lineup_galeria" class="small-12 columns p0 h_60vh h_sm_40vh">

      <?php
      $bandas = get_posts(array('post_type'=>'banda','posts_per_page'=>-1, 'orderby' => 'rand' ));

      foreach ( $bandas as $banda ) :
      ?>
         <a href="<?php echo $link_lineup; ?>">

            <div class="banda h_60vh h_sm_40vh m0 p0 z0 rel">
               <div class="small-12 columns p0 h_60vh  z0">
                  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($banda->ID), 'large' ); ?>

                  <img data-lazy="<?php echo $thumb[0]; ?>" />
               </div>
               <div id="img-caption" class="small-12 text-center absDownR fontRXXXL p2 pb6 z1k">
                  <div class="vcenter">
                     <h1 class="font2 white txsh2 fontHuge font_sm_XXL">
                        <?php echo apply_filters('the_title', $banda->post_title); ?>
                     </h1>
                  </div>
               </div>
            </div>

         </a>

      <?php endforeach; ?>

      </div>


   </div>
