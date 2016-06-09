<?php
/*Template Name: Merchandise*/
get_header();
?>


<!-- template merch -->
<div id="template-festival" class="small-12 large-9 columns p0">


  <div id="titulo-seccion-merch" class="small-12 columns h30vh fontRXXXL text-center">
    <div class="small-12 columns p1">Off Limits Merch</div>
    <div class="small-12 columns fontRL p2">Merchandise</div>

  </div>

<?php

get_template_part('secciones/merch/merch.php');


    ## seccion registro

    get_template_part('secciones/compartidas/footer_registro');

    ?>

  </div>
  <!-- template merch -->

  <?php

  get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');


  get_footer();
