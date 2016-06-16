<?php
$lista_de_correos = get_page_by_title("Lista de Correos");
?>
<section id="inicio-redes" class="small-12 columns h_80vh rel">

   <div class="w_100 h_100 abs z0 imgLiquid imgLiquidFill">
      <?php
      echo get_the_post_thumbnail( $lista_de_correos -> ID, 'large' );
      ?>
   </div>
   <div class="w_100 h_100 abs z1">

      <section id="inico-redes-ligas" class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 end columns p0 mt2 h_30 ">

         <div class="small-3 columns text-center h_100">
            <a href="http://facebook.com/offlimitsmx" class="white">
               <div class="vcenter">
                  <i class="fa fa-facebook fontRXL p3 txsh1"></i>
                  <p class="fontRS p1 black_bg white">offlimitsmx</p>
               </div>
            </a>
         </div>

         <div class="small-3 columns text-center h_100">
            <a href="http://instagram.com/offlimitsmx" class="white">
               <div class="vcenter">
                  <i class="fa fa-instagram fontRXL p3 txsh1"></i>
                  <p class="fontRS p1 black_bg white">@offlimitsmx</p>
               </div>
            </a>
         </div>

         <div class="small-3 columns text-center h_100">
            <a href="http://twitter.com/offlimitsmx" class="white">
               <div class="vcenter">
                  <i class="fa fa-twitter fontRXL p3 txsh1"></i>
                  <p class="fontRS p1 black_bg white">@OfflimitsMx</p>
               </div>
            </a>
         </div>

         <div class="small-3 columns text-center h_100">
            <a href="<?php echo get_the_permalink( get_page_by_title("Contacto") ); ?>" class="white">
               <div class="vcenter">
                  <i class="fa fa-envelope fontRXL p3 txsh1"></i>
                  <p class="fontRS p1 black_bg white">Contacto</p>
               </div>
            </a>
         </div>

      </section>

      <!-- registro -->
      <section id="inicio-redes-lista_de_correos" class="small-12 columns p0 m0 h_70 pb4 mb4">

         <!-- contacto -->
         <div class="small-12 columns h_50 p2 text-center">

            <h1 class="black_bg mt0">
               <?php echo apply_filters( 'the_title', $lista_de_correos -> post_title ); ?>
            </h1>
            <div class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 end columns fontL black acento2_bg p5">
               <?php echo apply_filters( 'the_content', $lista_de_correos -> post_content ); ?>
            </div>

         </div>

      </section>

   </div><!-- .abs -->
</section>

</section>
