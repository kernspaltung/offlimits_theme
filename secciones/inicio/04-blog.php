<?php
$blog = get_page_by_title("Blog");
?>
<section id="blog" class="small-12 columns p0 h_100 mb3 mt2 mt_sm_4">

  <!-- header secciones home -->
  <div id="blog-header" class="small-12 columns p0 h_10vh mb_sm_2 mb2">

    <a href="<?php echo get_the_permalink($blog->ID); ?>">

      <div class="small-9 columns fontRXL h_100">
          <h1 class="white m0">
             Blog
          </h1>
      </div>

      <div class="small-3 columns p2 m0 h_100 fontRXL text-center">
        <div class="vcenter">
          <i class="fa fa-angle-right"></i>
        </div>
      </div>

    </a>

  </div>
  <!-- temina header -->

<!-- blog ultima -->
<?php

$entradas = get_posts( array( 'posts_per_page' => 3, 'post_type' => 'post' ) );

?>

  <a href="<?php echo get_the_permalink( $entradas[0] -> ID ); ?>">
    <article id="blog-principal" class="large-12 columns p0 m0 minH_50vh white mb2">



      <div class="small-12 columns p0 m0 h_50vh h_sm_30vh">

        <div id="blog-thumb" class="columns h_100 imgLiquid imgLiquidFill cursor-pointer mb1">
           <?php echo get_the_post_thumbnail($entradas[0]->ID,'thumb'); ?>
        </div>

      </div>


      <div id="blog-principal-header" class="small-12 p2 m0 rel">
        <div id="blog-principal-titulo" class="medium-8 columns p2 m0 minH_10vh fontRL">
          <div class="vcenter">
          <h4>
             <?php echo apply_filters( 'the_title', get_the_title( $entradas[0] -> ID )); ?>
          </h4>
          </div>
        </div>

        <div id="blog-principal-header-fecha" class="medium-4 columns text-center p2 m0 minH_10vh fontRS show-for-medium">
          <div class="vcenter">
            <?php echo get_the_date('d\.m\.Y', $entradas[0]->ID ); ?>
          </div>
        </div>
      </div>


      <div class="small-9 columns p2 m0 h_10vh fontRS show-for-large">
        <div class="vcenter">
           <?php echo apply_filters('the_excerpt',$entradas[0]->post_excerpt); ?>
        </div>
      </div>

      <div class="small-3 columns p2 m0 minH_10vh fontRM bold text-center show-for-large">
        <div class="vcenter">
          <span class="pr2">Ver más</span><i class="fa fa-plus"></i>
        </div>
      </div>

    </article>
  </a><!-- termina blog ultima -->


  <?php

  for ($i=0; $i < 2; $i++) {
     ?>
       <a href="<?php echo get_the_permalink( $entradas[$i+1]->ID ); ?>">
         <article id="blog-secundario_"<?php echo $i+1; ?> class="large-6 columns p0 m0 minH_10vh white">

           <div class="small-12 columns p0 m0 minH_20vh">
             <div id="blog-thumb" class="columns h_30vh h_sm_20vh imgLiquid imgLiquidFill cursor-pointer">
               <?php echo get_the_post_thumbnail($entradas[$i+1]->ID,'thumb'); ?>
             </div>
           </div>

           <div id="blog-secundario-header" class="medium-9 columns p2 m0 minH_10vh fontRM">
             <div class="vcenter">
                <h5>
                   <?php echo apply_filters( 'the_title', get_the_title( $entradas[$i+1] -> ID )); ?>
                </h5>
             </div>
           </div>
           <div id="blog-secundario-header-fecha" class="medium-3 columns p2 pl2 minH_10vh fontRS show-for-medium">
             <div class="vcenter">
               <?php echo get_the_date('d\.m\.Y', $entradas[$i+1]->ID ); ?>
             </div>
           </div>

           <div class="small-9 columns p2 m0 ha fontRS hidden">
             <div class="vcenter">
                <?php echo apply_filters('the_excerpt',wp_trim_words($entradas[$i+1]->post_excerpt,14)); ?>
             </div>
           </div>

           <div class="small-3 columns p2 m0 minH_10vh fontRM bold text-center show-for-large">
             <div class="vcenter">
               <span class="pr2">Ver más</span><i class="fa fa-plus"></i>
             </div>
           </div>


         </article>
       </a>
     <?php
  }

  ?>



</section>
