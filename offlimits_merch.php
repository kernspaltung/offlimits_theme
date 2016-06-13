<?php
/*Template Name: Merchandise*/

get_header();
?>


<!-- template merch -->
<div id="festival" class="small-12 large-9 columns p0">


  <?php

  get_template_part('secciones/compartidas/header_seccion');

  get_template_part('secciones/merch/merch');


  ## seccion registro

  get_template_part('secciones/compartidas/registro');

  ?>

</div>
<!-- template merch -->

<?php

get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');


get_footer();
