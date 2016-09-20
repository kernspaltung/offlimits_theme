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
