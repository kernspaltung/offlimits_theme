<?php
$lista_de_correos = get_page_by_title("Lista de Correos");
?>
<section class="small-12 columns h_80vh rel">

   <div class="w_100 h_100 abs z0 imgLiquid imgLiquidFill">
      <?php
      echo get_the_post_thumbnail( $lista_de_correos -> ID, 'large' );
      ?>
   </div>
   <div class="w_100 h_100 abs z1">

  <section id="redes" class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 end columns p0 mt2 mb2 h_30 ">

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
  <!-- fin redes egistro -->

  <!-- registro -->
  <div class="small-12 columns p0 m0 h_70 pb4 mb4">

    <!-- contacto -->
    <div class="small-12 columns h_50 p2 text-center">

      <div class="small-12 medium-8 large-6 medium-offset-2 large-offset-3 end columns p2 pl6 pr6 fontRM black_tapes">
         <h1>
            <?php echo apply_filters( 'the_title', $lista_de_correos -> post_title ); ?>
         </h1>
         <?php echo apply_filters( 'the_content', $lista_de_correos -> post_content ); ?>
      </div>

    </div>

  </div>

  </div><!-- .abs -->
</section>
