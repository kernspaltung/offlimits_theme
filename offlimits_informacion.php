<?php
/*Template Name: Información*/

get_header();
?>


<!-- template informacion -->
<div id="template-informacion" class="small-12 large-9 columns p0">

  <ul class="accordion" data-accordion data-multi-expand="true">

    <?php

    get_template_part('secciones_informacion/horario');

    get_template_part('secciones_informacion/costo');

    get_template_part('secciones_informacion/lugar');

    get_template_part('secciones_informacion/puntos_de_venta');

    get_template_part('secciones_informacion/reglamento');

    get_template_part('secciones_informacion/transporte');

    ?>

  </ul>

  <?php
  ## seccion registro

  get_template_part('secciones_inicio/avisos_destacados_movil');

  get_template_part('secciones_compartidas/footer_registro');

  ?>

</div>
<!-- template informacion -->

<?php

get_template_part('secciones_compartidas/avisos_destacados_desktop_sticky');


get_footer();
