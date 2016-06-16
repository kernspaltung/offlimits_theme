<?php
/*Template Name: Blog*/
get_header();
?>


<div id="archive-offlimits" class="small-12 columns pl0">


  <?php for ($i=0; $i < 6 ; $i++) {

    ?>

    <article class="small-12 medium-6 columns p0">

      <div id="archive-offlimits-thumb" class="expanded row imgLiquidNoFill imgLiquid h_30vh w_100" >

        <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600.png" alt="offlimits MX hardcore festival" />

      </div>

      <div id="archive-offlimits-titlulo-fecha" class="small-12 columns p0 h_10vh pl3 pr3">

        <div class="small-7 columns p2 text-left fontRXL vcenter">

          Lorem ipsum dolor sit amet.

        </div>

        <div class="small-5 columns p2  text-right fontRM vcenter">

          1 enero 1979

        </div>

      </div>

      <div id="archive-offlimits-contenido" class="small-12 columns fontRM text-left p3 pl4 pr4">

        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Quidem, repellendus dignissimos doloremque itaque neque maiores corrupti,
        quos
        <a href="" class="small-12 columns fontRM bold p2 mt1">leer mas ...</a>
      </div>


    </article>

    <?php

  }

  ?>



</div>


<?php

get_footer();
?>
