<?php

// require_once "secciones/heroscreen.php";
get_template_part('secciones/inicio/00-heroscreen');
?>

<div id="contenido-general" class="columns ha">
   <div id="area_contenidos" class="small-12 large-9 p0 columns ha">
      <?php

      get_template_part('secciones/inicio/01-avisos_destacados_movil');

      get_template_part('secciones/inicio/02-lineup');

      get_template_part('secciones/inicio/03-festival');

      get_template_part('secciones/inicio/04-blog');

      get_template_part('footer_registro');

      ?>
   </div>

   <?php
   get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');
   ?>

</div>
