<li class="small-12 columns accordion-item " data-accordion-item>

  <a href="#" class="accordion-title fontRXXL">Puntos de venta</a>

  <div class="accordion-content" data-tab-content>

    <!--  -->

    <?php

    $html = '';


    for ($i=0; $i < 6; $i++) {

      $html .= '<div class="small-12 large-6 columns p0">

        <div class="small-12 columns h_10vh">

          <div id="titulo-punto-de-venta" class="small-6 columns pl2 fontRXL text-left vcenter">'
          . $i . '. Rockshop
          </div>
          <div id="informacion-punto-de-venta text-right" class="small-6 columns pl2 fontRM vcenter ">
            <small class="fontXS">de</small> 9:00am <small>a</small> 7:00pm
          </div>

        </div>
        <!-- contenido punto de venta-->
        <div class="small-12 columns h_25vh ">

          <div class="small-12 p2 fontRM">
            <p>Telefono: 5555555555</p>
            <p>Lugar: Lorem ipsum dolor sit amet.</p>
            <p>Dirección: Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Iste aliquid enim repudiandae nihil reprehenderit.</p>

          </div>


        </div>

      </div>';


    };
    echo $html;
    ?>

  </div>

</li>
<!-- primer acordeon -->
