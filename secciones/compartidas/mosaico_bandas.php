<?php

$html;
$bandas = get_posts(array('post_type'=>'banda','posts_per_page'=>-1));

foreach ( $bandas as $banda ) :

  ?>

  <article id="template-festival-lineup-banda" class="small-6 medium-3 columns p0 h_25vh end rel">

     <a href="" class="h_100 w_100 p0">

        <div id="template-festival-lineup-banda-imagen" class="expanded row imgLiquidFill imgLiquid h_100 w_100 abs" >
           <?php echo get_the_post_thumbnail( $banda -> ID, 'large' ); ?>
        </div>

        <div id="template-festival-lineup-banda-nombre" class="small-12 p3 text-center fontRXL white h_100 abs z1">
           <div class="vcenter">
              <?php echo apply_filters( 'the_title', $banda->post_title ); ?>
           </div>
        </div>

     </a>

  </article>

  <?php

endforeach;

echo $html;
