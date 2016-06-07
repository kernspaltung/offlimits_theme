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
        <ul class="small-12 columns p0 m0 h_100 fontRM text-center no-bullet">
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

        <div class="small-9 columns fontRM h_100">
          <div class="vcenter">
            Line Up
          </div>
        </div>

        <div class="small-3 columns p2 m0 h_100 fontRL text-center">
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

        <div id="template-festival-header-menu" class="small-12 p3 text-center fontRM white h_100 rel z1 translateY-100">
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
  <div id="template-festival-mapa" class="small-12 large-6 columns p0 h_70vh h_md_60vh">

    <!-- header seccion lugar mapa -->
    <div id="template-festival-header-mapa" class="small-12 columns p0 h_10vh">

      <a href="">

        <div class="small-9 columns fontRM h_100">
          <div class="vcenter">
            Lugar / Evento
          </div>
        </div>

        <div class="small-3 columns p2 m0 h_100 fontRL text-center">
          <div class="vcenter">
            <i class="fa fa-angle-right"></i>
          </div>
        </div>

      </a>

    </div>


    <div id="template-festival-map" class="small-6 columns h_100">Mapa Aquí</div>
    <div id="template-festival-map-info" class="small-6 columns h_100 p3">
      <div class="vcenter p0 fontRL">

        Lorem ipsum dolor sit amet, consectetur adipisicing elit.

      </div>

    </div>

  </div><!-- mapa como llegar -->



  <!-- contenedor servicios -->
  <div id="template-festival-servicios" class="small-12 large-6 columns p0 h_70vh h_md_60vh">


    <!-- header secciones servicios -->
    <div id="template-festival-header-servicios" class="small-12 columns p0 h_10vh">

      <a href="">

        <div class="small-9 columns fontRM h_100">
          <div class="vcenter">
            Servicios
          </div>
        </div>

        <div class="small-3 columns p2 m0 h_100 fontRL text-center">
          <div class="vcenter">
            <i class="fa fa-angle-right"></i>
          </div>
        </div>

      </a>

    </div>
    <!-- header secciones servicios -->


    <div class="columns p0 h_70vh">
      <!-- servicios -->
      <div id="template-festival-lista-servicios" class="small-12 columns p0 h_100">


        <ul class="small-12 columns p0 m0 h_100 no-bullet end">

          <?php

          $html = '';

          for ($i=0; $i < 6; $i++) {

            $html .=  '<li class="small-12 columns p0 altura-servicios">

              <div class="columns h_20">HEY! Titulo servicio' . $i . '</div>

              <div class="columns h_60">

                <div class="vcenter p2 fontRS">
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



</div>
<!-- template festival -->
<?php

get_template_part('secciones/avisos_destacados_desktop_sticky');


get_footer();
