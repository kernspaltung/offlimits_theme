<div id="lineup" class="small-12 columns p0 h_100">

<!-- header secciones home -->
  <div id="lineup-header" class="small-12 columns p0 h_10vh">

    <a href="">

      <div class="small-9 columns fontRXL h_100">
        <div class="vcenter">
          Lineup / Bandas
        </div>
      </div>

      <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
        <div class="vcenter">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>

    </a>

  </div>

  <div id="lineup_galeria" class="large-12 columns p0 h_80vh">

    <?php
    $titulo_imagen = array('Banda uno','Banda dos','Banda tres','Banda cuatro','Banda cinco',
    'Banda seis','Banda siete','Banda ocho','Banda nueve','Banda diez');

    for ($i=1; $i <= 9; $i++) { ?>
      <div class="columns h_100 p0">

        <div class="small-12 columns p0 h_80vh imgLiquid imgLiquidFill">

          <!-- <img src="img/slider/<?php #echo $i; ?>.jpg" alt="" /> -->
          <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/img/1200x600.png<?php echo $i; ?>" alt="" />

          <div id="img-caption" class="small-12 text-center absDownL fontRXXXL p2"><?php echo $titulo_imagen[$i - 1]?></div>

        </div>

      </div>

      <?php } ?>
    </div>

  </div>
