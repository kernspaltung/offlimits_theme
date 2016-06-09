<?php
/*Template Name: Información*/

get_header();
?>


<!-- template informacion -->
<div id="template-informacion" class="small-12 large-9 columns p0">

  <ul class="accordion" data-accordion data-multi-expand="true">

    <?php

    get_template_part('secciones/informacion/horario');

    get_template_part('secciones/informacion/costo');

    get_template_part('secciones/informacion/lugar');

    get_template_part('secciones/informacion/puntos_de_venta');

    get_template_part('secciones/informacion/reglamento');

    get_template_part('secciones/informacion/transporte');

    ?>

  </ul>

  <?php
  ## seccion registro

  get_template_part('secciones/inicio/avisos_destacados_movil');

  get_template_part('secciones/compartidas/footer_registro');

  ?>

</div>
<!-- template informacion -->

<?php

get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');


get_footer();
