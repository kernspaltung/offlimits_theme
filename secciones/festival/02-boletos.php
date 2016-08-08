<section id="festival-boletos" class="small-12 columns p5">


   <?php
   $boletos = get_page_by_title("Boletos");
   ?>

   <h1>
      <?php echo apply_filters( 'the_title', $boletos->post_title ); ?>
   </h1>


   <div id="festival-boletos-contenedor" class="small-12 columns p0">

      <div class="medium-6 columns p0">

         <div id="festival-boletos-texto" class="small-12 columns p0 pr3 pt1 black_tapes">

               <?php echo apply_filters( 'the_content', $boletos->post_content ); ?>

         </div>


      </div>

      <div class="medium-6 columns p0">

         <section id="festival-boletos-compra"class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 end columns mt2">
            <div id="festival-boletos-imagen" class="small-12 p5 columns p0 fontRL h_30vh">

               <div class="w_100 h_100 imgLiquid imgLiquidNoFill">
                  <?php echo get_the_post_thumbnail( $boletos->ID ); ?>
               </div>

            </div>

            <div class="titulo text-center black_tapes">
               <h4>
                  Compra tus boletos:
               </h4>
            </div>
            <div class="small-12">
               <input class="small-4 columns h_10vh small-center  text-center fontRXXL" type="number" min="1" max="10" name="numero-boletos" placeholder="1">
               <a href="<?php echo get_the_permalink( get_page_by_title('Pago') -> ID ); ?>">
               <button class="button acento_bg black white_hover small-8 columns fontRXL white h_10vh">
                  Compra 1
               </button>
               </a>
            </div>


         </section>

      </div>


   </div><!-- contenedor -->


   <?php
   //    endwhile;
   // endif;
   ?>


</section>


<section id="festival-puntos_de_venta" class="columns p5 neutral_oscuro2_bg">

   <?php
   $puntos_de_venta = get_page_by_title("Puntos de Venta");
   ?>

   <h1>
      <?php echo apply_filters( 'the_title', $puntos_de_venta->post_title ); ?>
   </h1>


   <div id="festival-puntos_de_venta-contenido" class="columns p3 p_sm_0">
      <?php echo apply_filters( 'the_content', $puntos_de_venta->post_content ); ?>
   </div>


</section>
