<div class="small-12 columns minH_50vh">

  <?php

  $merch = '';

  for ($i=1; $i < 8; $i++) {


    $merch .= '<a href="">
    <article id="merch" class="small-12 medium-6 columns p3 minH_10vh">

    <div class="small-12 columns p0 m0 h_40vh">

    <div id="merch-img-producto" class="columns h_100 imgLiquid imgLiquidFill z1k cursor-pointer">

    <img class="" src="' . get_stylesheet_directory_uri() . '/img/1200x600.png" alt="" />

    </div>

    </div>

    <div id="merch-titulo-precio" class="small-12 columns fontRL bold p2">

    <div class="small-8 columns vcenter text-left fontRXXXL">Titulo prenda</div>
    <div class="small-4 columns vcenter text-right fontRL bold">$150.00</div>

    </div>

    <div class="fontRL p2">lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit.

    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.

    <ul id="merch-tallas" class="menu horizontal small-12 large-6 columns mt2 fontRL">

    <a href="">
    <li class="small-4 columns h_5vh text-center p0">Tallas:&nbsp;</li>
    </a>
    <a href="">
    <li class="small-2 columns h_5vh text-center">S</li>
    </a>
    <a href="">
    <li class="small-2 columns h_5vh text-center">M</li>
    </a>
    <a href="">
    <li class="small-2 columns h_5vh text-center">L</li>
    </a>
    <a href="">
    <li class="small-2 columns h_5vh text-center">XL</li>
    </a>

    </ul>


    <ul id="merch-colores" class="menu horizontal small-12 large-6 columns mt2 fontRL" end>

    <a href="">
    <li class="small-4 columns h_5vh text-center p0">Colores:&nbsp;</li>
    </a>
    <a href="">
    <li class="hollow  small-2 columns h_5vh text-center color-producto-negro"></li>
    </a>
    <a href="">
    <li class="small-2 columns h_5vh text-center color-producto-gris"></li>
    </a>
    <a href="">
    <li class="small-2 columns h_5vh text-center color-producto-azul"></li>
    </a>
    <a href="">
    <li class="small-2 columns h_5vh text-center color-producto-rojo"></li>
    </a>

    </ul>

    <a class="small-12 columns button hollow p3 mt2 text-center" href="#"> Añadir a carro de compras</a>

    </div>
    </article>

    </a>';

  };

  echo $merch;

  ?>



</div>
