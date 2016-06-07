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
