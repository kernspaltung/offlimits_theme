<div id="festival" class="small-12 columns p0 h_100">

  <?php
  $intro_festival = get_page_by_title("Introducción Festival");

  ?>
  <div id="festival-header" class="small-12 columns p0 h_10vh">

    <a href="">

      <div class="small-9 columns fontRXL h_100">
        <div class="vcenter">
          <?php echo apply_filters('the_title',$intro_festival->post_title); ?>
        </div>
      </div>

      <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
        <div class="vcenter">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>

    </a>

  </div>



  <div id="festival-contenido" class="large-12 columns p0 h_80vh">

    <div class="small-5 medium-7 columns h_100 p0">

      <div class="row h_100">
        <!-- <div class="columns align-self-bottom p2"> -->

          <div id="festival-extracto-informacion" class="small-12 columns align-bottom p3 pb4 fontRL">
             <?php echo apply_filters( 'the_content', $intro_festival->post_content ); ?>
          </div>
        <!-- </div> -->
      </div>

    </div>

<!-- poster evento -->
    <div class="small-7 medium-5 columns p5 h_100">

      <!-- fondo -->
      <div id="festival-imagen-poster" class="row imgLiquid imgLiquidNoFill h_100 p3" >
         <?php echo get_the_post_thumbnail( $intro_festival->ID, 'large' ); ?>
      </div>

    </div>

  </div>









</div>
