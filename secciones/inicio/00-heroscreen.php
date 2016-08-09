<?php $portada = get_page_by_title("Portada"); ?>
<section id="heroscreen" class="columns p0 m0 h_80vh rel">

  <!-- fondo -->
  <div id="heroscreen-imagen-fondo" class="expanded row imgLiquid imgLiquidFill h_100 w_100 absUpL" >
     <?php echo get_the_post_thumbnail($portada->ID, 'large'); ?>
  </div>
  <!-- <div id="heroscreen-imagen-fondo" class="expanded row h_100 w_100 absUpL">
     <div class="img-overlay h_100 w_100 absUpL z1k1"></div>
   </div> -->

  <!-- logo -->
  <div id="heroscreen-logo-contador" class="columns h_100 pb4 align-center align-middle absDownL z1 mb5">
     <div class="h_100 rel">
<div class="vcenter h_a pt3">



               <div id="heroscreen-contador" class="columns h_50 text-center ">
                 <div class="small-12 medium-10 medium-centered large-8 large-centered columns fontHuge  font_sm_XXL white">

                    <span id="heroscreen-contador-dias" class="contador small-3 medium-2 columns text-left font3 txsh1">00</span>
                    <span class="separador f_l small-1 columns text-right font3 txsh1 hide-for-small-only">:</span>
                    <span id="heroscreen-contador-horas" class="contador small-3 medium-2 columns text-left font3 txsh1">00</span>
                    <span class="separador f_l small-1 columns text-right font3 txsh1 hide-for-small-only">:</span>
                    <span id="heroscreen-contador-minutos" class="contador small-3 medium-2 columns text-left font3 txsh1">00</span>
                    <span class="separador f_l small-1 columns text-right font3 txsh1 hide-for-small-only">:</span>
                    <span id="heroscreen-contador-segundos" class="contador small-2 columns text-left font3 txsh1 end">00</span>


                    <span id="heroscreen-contador-dias-texto" class="contador small-2 columns text-center fontRXL font3 txsh1">Días</span>
                    <span id="heroscreen-contador-horas-texto" class="contador small-2 small-offset-1 columns text-center fontRXL font3 txsh1">Horas</span>
                    <span id="heroscreen-contador-minutos-texto" class="contador small-2 small-offset-1 columns text-center fontRXL font3 txsh1">Minutos</span>
                    <span id="heroscreen-contador-segundos-texto" class="contador small-2 small-offset-1 columns text-center end fontRXL font3 txsh1">Segundos</span>

                    <!-- <div id="heroscreen-logo" class="columns h_50 imgLiquid imgLiquidNoFill cursor-pointer absUpL text-center">
                       <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/img/1200x600.png" alt="offlimits MX hardcore festival" />
                    </div> -->
                 </div>
               </div>

</div>

     </div>


  </div>


  <div id="heroscreen-indicadorscroll" class="w_100 cursor-pointer h_10vh mb2 absDownL z1 text-center">
     <div class="columns pb1">
        <i class="fa fa-chevron-down fontXXL acento cursor-pointer"></i>
     </div>
     <div class="columns txsh1">
        <h6>
           Scrollea hacia abajo
        </h6>
     </div>
  </div>

</section>
