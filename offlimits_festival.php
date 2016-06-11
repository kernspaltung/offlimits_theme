<?php
/*Template Name: Festival*/

get_header();
?>


<!-- template festival -->
<div id="template-festival" class="small-12 large-9 columns p0">


<?php

get_template_part('secciones/festival/00-header');


get_template_part('secciones/festival/01-lineup');


get_template_part('secciones/festival/02-boleto');


get_template_part('secciones/festival/03-mapa');


get_template_part('secciones/festival/04-servicios');


get_template_part('secciones/festival/05-actividades');


// get_template_part('secciones/festival/06-pre');

    ## seccion registro

    get_template_part('secciones/compartidas/footer_registro');

    ?>

  </div>
  <!-- template festival -->

  <?php



  get_footer();
