<?php
/*Template Name: FAQs*/

get_header();
?>


<!-- template faqs -->
<div id="festival" class="small-12 large-9 columns p0">

<?php

get_template_part('secciones/faqs/pregunta');


    ## seccion registro

    get_template_part('secciones/compartidas/registro');

    ?>

  </div>
  <!-- template faqs -->

  <?php

  get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');


  get_footer();
