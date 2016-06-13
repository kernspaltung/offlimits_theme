<?php
/*Template Name: Perfil Banda*/

get_header();
?>


<!-- template perfil -->
<div id="perfil" class="small-12 large-9 columns p0">

<?php

get_template_part('secciones/compartidas/header_seccion');


get_template_part('secciones/perfil/articulo_perfil');


# get_template_part('secciones/perfil/');


    ## seccion registro

    get_template_part('secciones/compartidas/registro');

    ?>

  </div>
  <!-- template perfil -->

  <?php

  get_template_part('secciones/compartidas/avisos_destacados_desktop_sticky');


  get_footer();
