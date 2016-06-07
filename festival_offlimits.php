<?php
/*Template Name: Festival*/

get_header();
?>


<!-- template festival -->
<div id="template-festival" class="small-12 large-9 columns p0">

  <div id="template-festival-header" class="small-12 columns p0 h_25vh">

    <!-- template-festival-fondo header -->
    <div id="template-festival-header-fondo" class="expanded row imgLiquidFill imgLiquid h_100 w_100 rel z-1" >
      <img class="" src="http://loremflickr.com/1220/600/hardcore" alt="offlimits MX hardcore festival" />
      <!-- <img class="" src="http://fakeimg.pl/420x380" alt="" /> -->
    </div>


    <!-- menu festival over header -->
    <div id="template-festival-header-menu" class="columns p0 rel z1 h_25vh translateY-100">

      <div class="small-12 columns h_50">
        <div class="small-6 p2 vcenter fontRXXL">
          Festival
        </div>
      </div>

      <nav class="menu horizontal small-12 columns h_50 p0">
        <ul class="small-12 columns p0 m0 h_100 fontRL text-center no-bullet">
          <a class="small-4 large-2 columns p0 h_100 h_md_50" href="#"><li class="vcenter">Lineup</li></a>
          <a class="small-4 large-2 columns p0 h_100 h_md_50" href="#"><li class="vcenter">Venue</li></a>
          <a class="small-4 large-2 columns p0 h_100 h_md_50" href="#"><li class="vcenter">Servicios</li></a>
          <a class="small-4 large-2 columns p0 h_100 h_md_50" href="#"><li class="vcenter">Actividades</li></a>
          <a class="small-4 large-2 columns p0 h_100 h_md_50" href="#"><li class="vcenter">Servicios</li></a>
          <a class="small-4 large-2 columns p0 h_100 h_md_50" href="#"><li class="vcenter">Información</li></a>
        </ul>
      </nav>
    </div>

  </div>
  <!-- template-festival-header -->



  <!-- template festival lineup -->
  <div id="template-festival-lineup" class="small-12 columns p0">

    <!-- header seccion lineup -->
    <div id="template-festival-lineup-header" class="small-12 columns p0 h_10vh">

      <a href="">

        <div class="small-9 columns fontRXL h_100">
          <div class="vcenter">
            Line Up
          </div>
        </div>

        <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
          <div class="vcenter">
            <i class="fa fa-angle-right"></i>
          </div>
        </div>

      </a>

    </div><!-- temina header seccion lineup-->


    <?php
    $html;
    for ($i=0; $i < 16; $i++) {

      $html .= '

      <div id="template-festival-lineup-mosaico" class="small-6 medium-3 columns p0 h_25vh end">

      <div id="template-festival-header-thumb" class="expanded row imgLiquidFill imgLiquid h_100 w_100 rel z-1" >
      <img class="" src="http://loremflickr.com/240/240/hardcore,live" alt="offlimits MX hardcore festival" />
      </div>

      <div id="template-festival-header-menu" class="small-12 p3 text-center fontRXL white h_100 rel z1 translateY-100">
      <div class="vcenter">
      Banda de Hardcore
      </div>
      </div>

      </div>';

    };

    echo $html;

    ?>

  </div>  <!-- template festival lineup -->






  <!-- mapa como llegar -->
  <div id="template-festival-mapa" class="small-12 large-6 columns p0 h_80vh h_md_70vh">

    <!-- header seccion lugar mapa -->
    <div id="template-festival-header-mapa" class="small-12 columns p0 h_10vh">

      <a href="">

        <div class="small-9 columns fontRXL h_100">
          <div class="vcenter">
            Lugar / Evento
          </div>
        </div>

        <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
          <div class="vcenter">
            <i class="fa fa-angle-right"></i>
          </div>
        </div>

      </a>

    </div>


    <div id="template-festival-map" class="small-6 columns h_70vh">Mapa Aquí</div>
    <div id="template-festival-map-info" class="small-6 columns h_70vh p3">
      <div class="vcenter p0 fontRXL">

        Lorem ipsum dolor sit amet, consectetur adipisicing elit.

      </div>

    </div>

  </div><!-- mapa como llegar -->



  <!-- contenedor servicios -->
  <div id="template-festival-servicios" class="small-12 large-6 columns p0 h_80vh h_md_70vh">


    <!-- header secciones servicios -->
    <div id="template-festival-header-servicios" class="small-12 columns p0 h_10vh">

      <a href="">

        <div class="small-9 columns fontRXL h_100">
          <div class="vcenter">
            Servicios
          </div>
        </div>

        <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
          <div class="vcenter">
            <i class="fa fa-angle-right"></i>
          </div>
        </div>

      </a>

    </div>
    <!-- header secciones servicios -->


    <div class="columns p0 h_70vh h_md_60vh">
      <!-- servicios -->
      <div id="template-festival-lista-servicios" class="small-12 columns p0 h_100">


        <ul class="small-12 columns p0 m0 h_100 no-bullet end">

          <?php

          $html = '';

          for ($i=0; $i < 6; $i++) {

            $html .=  '<li class="small-12 columns p0 altura-servicios">

            <div class="columns h_30 fontRL">Titulo servicio' . $i . '</div>

            <div class="columns h_70">

            <div class=" p1 fontRM">
            <!-- vcenter -->
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptatibus, ex quo magnam consectetur provident neque at.
            </div>

            </div>

            </li>';


          };

          echo $html;
          ?>


        </ul>



      </div>
      <!-- servicios -->


    </div>

  </div>
  <!-- contenedor servicios -->



  <!-- contenedor actividades -->
  <div id="template-festival-actividades" class="small-12 large-6 columns p0 h_80vh h_md_70vh">


    <!-- header secciones actividades -->
    <div id="template-festival-header-actividades" class="small-12 columns p0 h_10vh">

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
      <article id="template-festival-contenido-actividades" class="small-12 columns p0 altura-actividad">

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

      <div id="template-festival-actividad-thumb" class="expanded row imgLiquidNoFill imgLiquid h_100 w_100" >
      <img class="" src="http://loremflickr.com/240/240/hardcore,live" alt="offlimits MX hardcore festival" />
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



  <!-- contenedor prefest -->
  <div id="template-festival-prefest" class="small-12 large-6 columns p0 h_80vh h_md_70vh">


    <!-- header secciones prefest -->
    <div id="template-festival-header-prefest" class="small-12 columns p0 h_10vh">

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

  </div>
  <!-- contenedor prefest -->

  <!-- seccion registro -->
  <?php

  get_template_part('footer_registro');

  ?>

</div>
<!-- template festival -->
<?php

get_template_part('secciones_home/avisos_destacados_desktop_sticky');


get_footer();
