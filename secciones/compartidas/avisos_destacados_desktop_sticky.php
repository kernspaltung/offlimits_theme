<?php
$avisos_pagina = get_page_by_title("Avisos");

$avisos = get_posts( array( 'posts_per_page' => 3, 'post_type' => 'aviso' ) );
?>

<div id="avisos-destacados-sticky-large" class="large-3 columns show-for-large p0" data-sticky-container>

  <div id="avisos-destacados-sticky" class="sticky" data-sticky data-margin-top="7" data-anchor="area_contenidos">


    <!-- noticia destacada principal -->
    <a href="<?php echo get_the_permalink( $avisos_pagina -> ID ); ?>">
      <div id="avisos-destacados-header" class="large-9 columns p2 m0 h_10vh fontRXL text-left">
        <div class="vcenter">
          Avisos
        </div>
      </div>
      <div id="avisos-destacados-header" class="large-3 columns p2 m0 h_10vh fontRXL bold text-center">
        <div class="vcenter">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>
    </a> <!-- temrina header destacados sticky -->

    <a href="<?php echo get_the_permalink( $avisos[0] -> ID ); ?>">
      <article id="avisos-destacados-principal" class="large-12 columns p0 m0 min_20vh">

        <div id="avisos-destacados-principal-header" class="large-8 columns p1 m0 ha fontRL">
          <div class="vcenter">
          <?php echo apply_filters('the_title',$avisos[0]->post_title); ?>
          </div>
        </div>
        <div id="avisos-destacados-principal-header-fecha" class="large-4 columns text-center pt1 fontRM">
           <?php echo get_the_date('d \d\e F, Y', $avisos[0]->ID ); ?>
         </div>

        <div class="small-12 columns p0 m0 h_22vh">
          <div id="avisos-destacados-thumb" class="columns h_100 imgLiquid imgLiquidFill cursor-pointer">
             <?php echo get_the_post_thumbnail($avisos[0]->ID,'thumb'); ?>
          </div>

        </div>

        <div class="large-10 columns p2 m0 h_10vh fontRM">
          <div class="vcenter">
             <?php echo apply_filters('the_excerpt',$avisos[0]->post_excerpt); ?>
          </div>
        </div>

        <div class="large-2 columns p2 m0 minH_10vh fontRM bold text-center">
          <div class="vcenter">
            <i class="fa fa-plus"></i>
          </div>
        </div>

      </article>
    </a>



   <?php for ($i=0; $i < 2; $i++) : ?>

   <a href="<?php echo get_the_permalink( $avisos[$i+1]->ID ); ?>">
      <article id="avisos-destacados-secundario" class="large-6 columns p0 m0">


        <div class="small-12 columns p0 m0 h_12vh">
          <div id="avisos-destacados-thumb" class="columns h_100 imgLiquid imgLiquidFill cursor-pointer">
            <?php echo get_the_post_thumbnail($avisos[$i+1]->ID,'thumb'); ?>
          </div>
        </div>

        <div id="avisos-destacados-principal-header" class="small-12 columns p1 m0 ha fontRM">
          <div class="vcenter">
            <?php echo apply_filters('the_title',$avisos[$i+1]->post_title); ?>
          </div>
          <div id="avisos-destacados-principal-header-fecha" class="large-12 columns p1 pl2 fontRS">
            <?php echo date_i18n('d \d\e F, Y', strtotime(get_the_date( array('post' => $avisos[$i+1]->ID )) ) ); ?>
          </div>

        </div>

        <!-- <div class="large-12 columns p2 m0 ha fontRXXS">
          <div class="vcenter">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quaerat, sunt dignissimos.
          </div>
        </div> -->

        <div class="large-12 columns p2 m0 fontRM bold text-center">
          <div class="vcenter">
            <i class="fa fa-plus"></i>
          </div>
        </div>
      </article>
    </a> <!-- termina primer aviso  -->

<?php endfor; ?>

  </div><!-- Avisos sticky -->

</div>
