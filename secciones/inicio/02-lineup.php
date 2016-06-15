<?php

   $festival = get_page_by_title("Festival");
   $link_lineup = add_query_arg( 'scrollTo', 'festival-lineup', get_the_permalink($festival->ID) );

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

   <div id="lineup_galeria" class="small-12 columns p0 h_60vh">

      <?php
      $bandas = get_posts(array('post_type'=>'banda','posts_per_page'=>-1));

      foreach ( $bandas as $banda ) :
      ?>
         <a href="<?php echo $link_lineup; ?>">

            <div class="banda h_60vh m0 p0 z0 rel">
               <div class="small-12 columns p5 h_60vh imgLiquid imgLiquidFill z0">
                  <?php echo get_the_post_thumbnail($banda->ID,'large'); ?>
               </div>
               <div id="img-caption" class="small-12 text-center absDownR fontRXXXL p2 pb6 z1k">
                  <div class="vcenter">
                     <h1 class="font2 white txsh1">
                        <?php echo apply_filters('the_title', $banda->post_title); ?>
                     </h1>
                  </div>
               </div>
            </div>

         </a>

      <?php endforeach; ?>

      </div>


   </div>
