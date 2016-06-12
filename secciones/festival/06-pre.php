<!-- contenedor prefest -->
<div id="festival-prefest" class="small-12 large-6 columns p0 h_80vh h_md_70vh">


  <!-- header secciones prefest -->
  <div id="festival-header-prefest" class="small-12 columns p0 h_10vh">

    <a href="">

      <div class="small-9 columns fontRXL h_100">
        <div class="vcenter">
          Pre-Fest
        </div>
      </div>

      <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
        <div class="vcenter">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>

    </a>

  </div>
  <!-- header secciones prefest -->


  <?php

  $html = '';
  for ($i=0; $i < 2 ; $i++) {
    $html .= '
    <!-- prefest -->
    <article id="festival-contenido-prefest" class="small-12 columns p0 h_35vh h_md_30vh">


    <div class="small-12 columns h_60">

    <div id="festival-actividad-thumb" class="expanded row imgLiquidFill imgLiquid h_100 w_100" >
      <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600.png" alt="offlimits MX hardcore festival" />
    </div>

    </div>


    <div class="small-12 columns p1 fontRXL h_40">

    <!-- titulo -->
    <div class="small-12 columns p2 h_50 fontRL">

    Titulo actividad

    </div>

    <div class="small-12 columns p2 h_50 fontRS">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aspernatur corrupti repudiandae error veritatis provident sed, esse quasi est, fugit sequi nemo aperiam atque.
    </div>

    </div>


    </article>
    <!-- prefest -->
    ';
  }

  echo $html;

  ?>





</div>
<!-- contenedor prefest -->
