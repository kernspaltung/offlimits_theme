<?php
/*Template Name: Lineup*/

get_header();
?>


<!-- template lineup -->
<div id="template-lineup" class="small-12 large-9 columns p0">

<?php

get_template_part('secciones_lineup/header_lineup');


get_template_part('secciones_lineup/lineup_lineup');


    ## seccion registro

    get_template_part('secciones_compartidas/footer_registro');

    ?>

  </div>
  <!-- template lineup -->

  <?php

  get_template_part('secciones_compartidas/avisos_destacados_desktop_sticky');


  get_footer();
