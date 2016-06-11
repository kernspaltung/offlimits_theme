<?php
/*Template Name: Festival*/

get_header();
?>


<!-- template festival -->
<section id="festival" class="columns p0">


   <?php

   get_template_part('secciones/festival/01-lineup');


   get_template_part('secciones/festival/02-boletos');


   get_template_part('secciones/festival/03-mapa');


   get_template_part('secciones/festival/04-servicios');


   get_template_part('secciones/festival/05-actividades');


// get_template_part('secciones/festival/06-pre');

    ## seccion registro

    get_template_part('secciones/compartidas/footer_registro');

    ?>

</section>


  <?php



  get_footer();
