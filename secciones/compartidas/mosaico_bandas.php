<?php

$bandas = get_posts(array('post_type'=>'banda','posts_per_page'=>-1, 'orderby'=>'menu_order', 'order' => 'ASC' ));

foreach ( $bandas as $banda ) :

  ?>

  <article id="festival-lineup-banda" class="medium-6 large-3 columns p0 h_20vh end rel imgfx1 ">

     <a href="<?php echo get_the_permalink($banda->ID); ?>" class="h_100 w_100 p0">

        <div id="festival-lineup-banda-imagen" class="expanded row imgLiquidFill imgLiquid abs w_100 h_100" >
           <?php echo get_the_post_thumbnail( $banda -> ID, 'large' ); ?>
        </div>

        <div id="festival-lineup-banda-nombre" class="small-12 p3 text-center fontRXL  white h_100 abs z1">
           <div class="vcenter fontXXL font_sm_XL font2 txsh1">
              <?php echo apply_filters( 'the_title', $banda->post_title ); ?>
           </div>
        </div>

     </a>

  </article>

  <?php

endforeach;
