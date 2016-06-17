<div id="festival" class="small-12 columns p0 h_100 mt2">

   <?php

   $festival = get_page_by_title("Festival");
   $informacion_general = get_page_by_title("Información General");
   $intro_festival = get_page_by_title("Introducción Festival");

   ?>
   <div id="festival-header" class="small-12 columns p0 h_10vh">

      <a href="<?php echo get_the_permalink( $festival -> ID ); ?>">

         <div class="small-12 large-9 columns fontRXL h_100">
            <div class="vcenter">

               <h1 class="white">
                  <?php echo apply_filters('the_title',$festival->post_title); ?>
               </h1>

            </div>
         </div>

         <div class="small-12 large-3 columns p2 m0 h_100 fontRXL text-center">
            <div class="vcenter">
               <i class="fa fa-angle-right"></i>
            </div>
         </div>

      </a>

   </div>



   <div id="festival-contenido" class="large-12 columns p0 h_70vh">
      <a href="<?php echo get_the_permalink( $festival -> ID ); ?>" class="white">

         <div class="small-12 medium-7 columns h_100 p0">

            <div class="row h_100">
               <!-- <div class="columns align-self-bottom p2"> -->

               <div id="festival-extracto-informacion" class="small-12 columns align-bottom p3 fontRM h_40vh h_sm_70vh">
                  <div class="vcenter">
                     <?php echo apply_filters( 'the_content', $intro_festival->post_content ); ?>
                  </div>
               </div>

               <div class="medium-6 columns text-center fontM medium-offset-3 end text-center">

                  <a href="<?php echo get_the_permalink( $festival -> ID ); ?>" class="small-6 medium-12 button h_10vh">
                     <div class="vcenter">
                        Más información
                     </div>
                  </a>

               </div>
               <!-- <div class="small-6 columns text-center fontM">

                  <a href="<?php echo get_the_permalink( $informacion_general -> ID ); ?>" class="w_50 button h_10vh">
                     <div class="vcenter">
                        <?php echo apply_filters( 'the_title', $informacion_general->post_title ); ?>
                     </div>
                  </a>


               </div> -->

               <!-- </div> -->
            </div>

         </div>

         <!-- poster evento -->
         <div class="large-5 show-for-large columns h_100 ">

            <!-- fondo -->
            <div id="festival-imagen-poster" class="row imgLiquid imgLiquidNoFill h_100 p3" >
               <?php echo get_the_post_thumbnail( $intro_festival->ID, 'large' ); ?>
            </div>

         </div>

      </a>
   </div>









</div>
