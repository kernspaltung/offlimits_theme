<?php
/*Template Name: Festival*/

get_header();
?>


<div id="template-festival-header" class="small-12 large-9 columns p0 h_25vh">

  <!-- template-festival-fondo header -->
  <div id="template-festival-header-fondo" class="expanded row imgLiquidFill imgLiquid h_100 w_100 rel z-1" >
    <!-- <img class="" src="http://loremflickr.com/1220/600/hardcore" alt="offlimits MX hardcore festival" /> -->
    <img class="" src="http://fakeimg.pl/420x380" alt="" />
  </div>


  <!-- header + menu festival -->
  <div id="template-festival-header-menu" class="columns p0 rel z1 h_25vh translate_festival_header">

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
    </div>


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

      </div>

    </div>
    <!-- temina header -->



    <div id="template-festival-lineup" class="small-12 columns p0">

      <?php
      $html;
      for ($i=0; $i < 16; $i++) {

        $html .= '

        <div id="template-festival-lineup-mosaico" class="small-6 medium-3 columns p0 h_25vh end">

          <div id="template-festival-header-thumb" class="expanded row imgLiquidFill imgLiquid h_100 w_100 rel z-1" >
            <img class="" src="http://loremflickr.com/240/240/hardcore" alt="offlimits MX hardcore festival" />
          </div>

        </div>';

      };

      echo $html;

      ?>

    </div>

  </div><!-- template-festival-header -->


  <?php

  get_template_part('secciones/avisos_destacados_desktop_sticky');


  get_footer();
