<?php

$html;
$bandas = get_posts(array('post_type'=>'banda','posts_per_page'=>-1, 'orderby'=>'menu_order', 'order' => 'ASC' ));

foreach ( $bandas as $banda ) :

  ?>

  <article id="festival-lineup-banda" class="small-6 medium-3 columns p0 h_15vh end rel  ">

     <a href="" class="h_100 w_100 p0">

        <div id="festival-lineup-banda-imagen" class="expanded row imgLiquidFill imgLiquid h_100 w_100 abs imgfx1 colorhvr" >
           <?php echo get_the_post_thumbnail( $banda -> ID, 'large' ); ?>
        </div>

        <div id="festival-lineup-banda-nombre" class="small-12 p3 text-center fontRXL  white h_100 abs z1">
           <div class="vcenter fontXXL font2 txsh1">
              <?php echo apply_filters( 'the_title', $banda->post_title ); ?>
           </div>
        </div>

     </a>

  </article>

  <?php

endforeach;

echo $html;
