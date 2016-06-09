<div id="titulo-seccion-merch" class="small-12 columns h30vh fontRXXXL text-center">
  <div class="small-12 columns p1">Off Limits Merch</div>
  <div class="small-12 columns fontRL p2">Merchandise</div>

</div>

<div class="small-12 columns minH_50vh">

  <?php

  $merch = '';

  for ($i=1; $i < 3; $i++) {

    $merch .=
    '<article id="merch" class="small-6 large-12 columns p3 minH_10vh">

      <div class="small-12 columns p0 m0 minH_50vh">

        <div id="avisos-destacados-thumb" class="columns h_40vh imgLiquid imgLiquidFill cursor-pointer">
          <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/img/1200x600.png" alt="" />
        </div>

      </div>

      <div id="merch-titulo-precio" class="vcenter fontRL bold p2">

        <div class="small-6 columns vcenter text-left fontRXL">Titulo prenda</div>
        <div class="small-6 columns vcenter text-right fontRM bold">$150.00</div>

      </div>

      <div class="fontRXL p2">lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit.

        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.

        <ul id="merch-tallas" class="small-12 large-6 columns m0 fontRL">

          <li class="small-12 columns">S</li>
          <li class="small-12 columns">M</li>
          <li class="small-12 columns">L</li>
          <li class="small-12 columns">XL</li>

        </ul>


        <ul id="merch-colores" class="small-12 large-6 columns m0 fontRL">

          <li class="small-3 columns h_2vh">Negro</li>
          <li class="small-3 columns h_2vh">Rojo</li>
          <li class="small-3 columns h_2vh">gris</li>
          <li class="small-3 columns h_2vh">Naranja</li>

        </ul>

        <a class="small-12 columns button hollow p3 text-center" href="#"> Añadir a carro de compras</a>

      </div>
    </article>';


  };

  echo $merch;

  ?>
no merch
</div>
