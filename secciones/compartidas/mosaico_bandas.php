<?php

$html;
for ($i=0; $i < 16; $i++) {

  ?>

  <article id="template-festival-lineup-banda" class="small-6 medium-3 columns p0 h_25vh end rel">

     <a href="" class="h_100 w_100 p0">

        <div id="template-festival-lineup-banda-imagen" class="expanded row imgLiquidFill imgLiquid h_100 w_100 abs" >
        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600.png" alt="offlimits MX hardcore festival" />
        </div>

        <div id="template-festival-lineup-banda-nombre" class="small-12 p3 text-center fontRXL white h_100 abs z1">
           <div class="vcenter">
           Banda de Hardcore
           </div>
        </div>

     </a>

  </article>

  <?php

};

echo $html;
