<?php $portada = get_page_by_title("Portada"); ?>
<section id="heroscreen" class="columns p0 m0 h_80vh rel">

  <!-- fondo -->
  <div id="heroscreen-imagen-fondo" class="expanded row imgLiquid imgLiquidFill  h_100 w_100 absUpL" >
     <?php echo get_the_post_thumbnail($portada->ID, 'large'); ?>
  </div>
  <!-- <div class="img-overlay h_100 w_100 absUpL z1"></div> -->

  <!-- logo -->
  <div id="heroscreen-logo-contador" class="columns pb4 align-center align-middle absDownL z1">


    <div id="heroscreen-contador" class="columns h_50 text-center">
      <div class="small-12 medium-10 medium-centered large-8 large-centered columns fontRXXL  white bold">

         <span id="heroscreen-contador-dias" class="contador small-3 columns text-left">00</span>
         <span class="separador f_l small-1 columns text-right">:</span>
         <span id="heroscreen-contador-horas" class="contador small-2 columns text-left">00</span>
         <span class="separador f_l small-1 columns text-right">:</span>
         <span id="heroscreen-contador-minutos" class="contador small-2 columns text-left">00</span>
         <span class="separador f_l small-1 columns text-right">:</span>
         <span id="heroscreen-contador-segundos" class="contador small-2 columns text-left end">00</span>


         <span id="heroscreen-contador-dias-texto" class="contador small-3 columns text-center fontRS">Días</span>
         <span id="heroscreen-contador-horas-texto" class="contador small-2 small-offset-1 columns text-center fontRS">Horas</span>
         <span id="heroscreen-contador-minutos-texto" class="contador small-2 small-offset-1 columns text-center fontRS">Minutos</span>
         <span id="heroscreen-contador-segundos-texto" class="contador small-2 small-offset-1 columns text-center end fontRS">Segundos</span>

         <!-- <div id="heroscreen-logo" class="columns h_50 imgLiquid imgLiquidNoFill cursor-pointer absUpL text-center">
            <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/img/1200x600.png" alt="offlimits MX hardcore festival" />
         </div> -->
      </div>
    </div>

  </div>

</section>
