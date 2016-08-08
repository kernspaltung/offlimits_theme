<?php
$lista_de_correos = get_page_by_title("Lista de Correos");
?>
<section id="inicio-redes" class="small-12 columns xrow h_100vh rel p0">

   <div class="w_100 h_100 abs z0 imgLiquid imgLiquidFill">
      <?php
      echo get_the_post_thumbnail( $lista_de_correos -> ID, 'large' );
      ?>
   </div>
   <div class="w_100 h_100 abs z1">

      <section id="redes-ligas" class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 end columns p5 p_sm_1 mt1 mt_sm_0 mb1 mb_sm_0">

         <div class="small-6 medium-3 columns text-center h_100">
            <a href="http://facebook.com/offlimitsmx" class="white">

                  <i class="fa fa-facebook fontXXL font_sm_L p3"></i>
                  <p class="fontS font_sm_M p1 black_bg white acento_hover_bg black_hover">offlimitsmx</p>

            </a>
         </div>

         <div class="small-6 medium-3 columns text-center h_100">
            <a href="http://instagram.com/offlimitsmx" class="white">

                  <i class="fa fa-instagram fontXXL font_sm_L p3"></i>
                  <p class="fontS font_sm_M p1 black_bg white acento_hover_bg black_hover">@offlimitsmx</p>

            </a>
         </div>

         <div class="small-6 medium-3 columns text-center h_100">
            <a href="http://twitter.com/offlimitsmx" class="white">

                  <i class="fa fa-twitter fontXXL font_sm_L p3"></i>
                  <p class="fontS font_sm_M p1 black_bg white acento_hover_bg black_hover">@OfflimitsMx</p>

            </a>
         </div>

         <div class="small-6 medium-3 columns text-center h_100">
            <a href="<?php echo get_the_permalink( get_page_by_title("Contacto") ); ?>" class="white">

                  <i class="fa fa-envelope fontXXL font_sm_L p3"></i>
                  <p class="fontS font_sm_M p1 black_bg white acento_hover_bg black_hover">Contacto</p>

            </a>
         </div>

      </section>

      <!-- registro -->
      <section id="inicio-redes-lista_de_correos" class="small-12 columns p0 m0 h_70 pb4 mb4">

         <!-- contacto -->
         <div class="small-12 columns h_50 p2 text-center">

            <h1 class="black_bg mt0 hide-for-small-only">
               <?php echo apply_filters( 'the_title', $lista_de_correos -> post_title ); ?>
            </h1>
            <div class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 end columns fontL black acento2_bg acento2_bd p5">
               <?php echo apply_filters( 'the_content', $lista_de_correos -> post_content ); ?>
            </div>

         </div>

      </section>

   </div><!-- .abs -->
</section>

</section>
