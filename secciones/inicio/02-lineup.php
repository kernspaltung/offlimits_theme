<div id="lineup" class="small-12 columns p0 h_100">

   <!-- header secciones home -->
   <div id="lineup-header" class="small-12 columns p0 h_10vh">

      <a href="">

         <div class="small-9 columns fontRXL h_100">
            <div class="vcenter">
               Lineup / Bandas
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
         <a href="<?php echo get_the_permalink($banda->ID); ?>">

            <div class="banda h_60vh m0 p5 z0 rel">
               <div class="small-12 columns p5 h_60vh imgLiquid imgLiquidFill z0">
                  <?php echo get_the_post_thumbnail($banda->ID,'large'); ?>
               </div>
               <div id="img-caption" class="small-12 text-center absDownR fontRXXXL p2 pb6 z1k">
                  <div class="vcenter">
                     <?php echo apply_filters('the_title', $banda->post_title); ?>
                  </div>
               </div>
            </div>

         </a>

      <?php endforeach; ?>

      </div>


   </div>
