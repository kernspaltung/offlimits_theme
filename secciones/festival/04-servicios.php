<!-- contenedor servicios -->
<div id="festival-servicios" class="small-12 large-6 columns p0 h_80vh h_md_70vh">


  <!-- header secciones servicios -->
  <div id="festival-header-servicios" class="small-12 columns p0 h_10vh">

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
    <div id="festival-lista-servicios" class="small-12 columns p0 h_100">


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
