<?php
/*Template Name: Lineup*/

get_header();
?>


<!-- template lineup -->
<div id="lineup" class="small-12 large-9 columns p0">

<?php

// get_template_part('secciones/compartidas/header_seccion');

get_template_part('secciones/lineup/header_lineup');


get_template_part('secciones/lineup/lineup_lineup');


    ## seccion registro

    get_template_part('secciones/compartidas/registro');

    ?>

  </div>
  <!-- template lineup -->

  <?php

  get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');


  get_footer();
