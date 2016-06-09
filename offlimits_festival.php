<?php
/*Template Name: Festival*/

get_header();
?>


<!-- template festival -->
<div id="template-festival" class="small-12 large-9 columns p0">

<?php

get_template_part('secciones/festival/header_festival');


get_template_part('secciones/festival/lineup_festival');


get_template_part('secciones/festival/mapa_festival');


get_template_part('secciones/festival/servicios_festival');


get_template_part('secciones/festival/actividades_festival');


get_template_part('secciones/festival/pre_festival');

    ## seccion registro

    get_template_part('secciones/compartidas/footer_registro');

    ?>

  </div>
  <!-- template festival -->

  <?php

  get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');


  get_footer();
