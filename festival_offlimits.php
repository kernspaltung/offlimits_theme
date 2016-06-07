<?php
/*Template Name: Festival*/

get_header();
?>


<!-- template festival -->
<div id="template-festival" class="small-12 large-9 columns p0">

<?php

get_template_part('secciones_festival/header_festival');


get_template_part('secciones_festival/lineup_festival');


get_template_part('secciones_festival/mapa_festival');


get_template_part('secciones_festival/servicios_festival');


get_template_part('secciones_festival/actividades_festival');


get_template_part('secciones_festival/pre_festival');

    ## seccion registro

    get_template_part('footer_registro');

    ?>

  </div>
  <!-- template festival -->

  <?php

  get_template_part('secciones_home/avisos_destacados_desktop_sticky');


  get_footer();
