<?php

// require_once "secciones/heroscreen.php";
get_template_part('secciones/inicio/00-heroscreen');
?>

<section id="contenido-general" class="columns ha">
   <section id="area_contenidos" class="small-12 small-pull-12 large-9 p0 columns ha">
      <?php

      // get_template_part('secciones/inicio/01-avisos_destacados_movil');

      get_template_part('secciones/inicio/02-lineup');

      get_template_part('secciones/inicio/03-festival');

      get_template_part('secciones/inicio/04-blog');

      get_template_part('footer_registro');

      ?>

   </section>

   <?php
   get_template_part('secciones/compartidas/avisos_destacados');
   ?>

</section>
