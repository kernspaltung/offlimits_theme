<!-- contenedor actividades -->
<div id="festival-actividades" class="small-12 large-6 columns p0 h_80vh h_md_70vh">


  <!-- header secciones actividades -->
  <div id="festival-header-actividades" class="small-12 columns p0 h_10vh">

    <a href="">

      <div class="small-9 columns fontRXL h_100">
        <div class="vcenter">
          Actividades
        </div>
      </div>

      <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
        <div class="vcenter">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>

    </a>

  </div>
  <!-- header secciones actividades -->

  <?php

  $html = '';
  for ($i=0; $i < 3 ; $i++) {
    $html .= '
    <!-- actividad -->
    <article id="festival-contenido-actividades" class="small-12 columns p0 altura-actividad">

    <div class="small-12 columns p1 fontRXL h_30">

    <!-- titulo -->
    <div class="small-6 columns p1 vcenter">

    titulo actividad

    </div>

    <!-- hora -->
    <div class="small-6 columns p1 text-right vcenter">

    19:00 hrs

    </div>

    </div>

    <!-- contenido actividades -->
    <div class="small-6 large-4 columns h_70">

    <div id="festival-actividad-thumb" class="expanded row imgLiquidFill imgLiquid h_100 w_100" >
    <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600.png" alt="offlimits MX hardcore festival" />
    </div>

    </div>

    <div class="small-6 large-8 columns h_70">

    <div class="vcenter fontRM">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates aspernatur corrupti repudiandae error veritatis provident sed, esse quasi est, fugit sequi nemo aperiam atque.
    </div>


    </div>
    <!-- contenido actividades -->


    </article>
    <!-- actividad -->
    ';
  }

  echo $html;

  ?>
  <!-- termina actividad     -->

</div>
<!-- contenedor actividades -->
