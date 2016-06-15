<?php
/*
Template Name: Boletos
*/


get_header();
?>


<div id="boletos-contenedor" class="small-12 columns p0">

  <div id="boletos-titulo"class="small-12 columns h_20vh">
    <h1 class="small-12 vcenter fontRXXL">Titulo Boletaje</h1>
  </div>


  <div id="boletos- texto" class="small-12 large-7 columns p3 h_40vh">
    <div class="vcenter fontRL">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </div>
  </div>

  <div id="boletos-imagen" class="small-12 large-5 columns p0 fontRL h_40vh">

    <img src="<?php echo get_stylesheet_directory_uri();?>/img/1200x600.png"  class="vcenter w_100" alt="">

  </div>


  <form action=" " id="boletos-compra"class="small-12 columns h_20vh">

    <input class="small-4 large-2 columns h_10vh small-center  text-center fontRXXL" type="number" name="numero-boletos" min="0" max="10" placeholder="10">

    <button class="button hollow small-8 large-10 columns fontRXXL white h_10vh"><h3 class="vcenter">Compra tus boletos</h3></button>

  </form>



</div><!-- contenedor -->




<?php

get_footer();
