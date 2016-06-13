<?php
/*Template Name: Boletos*/

get_header();
?>


<div id="boletos-titulo" class="small-12 columns p0">

  <div id="boletos-titulo"class="small-12 columns h_20vh">
    <h1 class="small-12 vcenter fontRXXL">Titulo Boletaje</h1>
  </div>


  <div id="boletos- texto" class="small-12 large-5 columns p3 fontRL ">
    <div class="vcenter">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </div>
  </div>

  <div id="boletos-imagen" class="small-12 large-5 columns p0 fontRL ">

    <img src="<?php get_styleshee_directory_uri()?>/img/1200x600.png"  class="vcenter w_100" alt="">

  </div>


  <form action id="boletos-compra"class="small-12 columns h_20vh">

    <input type="number" name="numero-boletos" min="0" max="10">

    <button class="button hollow small-12 vcenter fontRXXL">Compra tus boletos</button>

  </form>



</div><!-- contenedor -->




<?php

get_footer();
