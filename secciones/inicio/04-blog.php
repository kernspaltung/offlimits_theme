<?php
$blog = get_page_by_title("Blog");
?>
<div id="blog" class="small-12 columns p0 h_100">

  <!-- header secciones home -->
  <div id="blog-header" class="small-12 columns p0 h_10vh">

    <a href="<?php echo get_the_permalink($blog->ID); ?>">

      <div class="small-9 columns fontRXL h_100">
        <div class="vcenter">
          <h1 class="white">
             Blog
          </h1>
        </div>
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
    <article id="blog-principal" class="large-12 columns p0 m0 minH_50vh white">

      <div id="blog-principal-header" class="small-12 p2 m0 rel">
        <div id="blog-principal-titulo" class="small-8 columns p2 m0 minH_10vh fontRL">
          <div class="vcenter">
          <?php echo apply_filters( 'the_title', get_the_title( $entradas[0] -> ID )); ?>
          </div>
        </div>

        <div id="blog-principal-header-fecha" class="small-4 columns text-center p2 m0 minH_10vh fontRS">
          <div class="vcenter">
            <?php echo get_the_date('d\.m\.Y', $entradas[0]->ID ); ?>
          </div>
        </div>
      </div>


      <div class="small-12 columns p0 m0 minH_50vh">

        <div id="blog-thumb" class="columns h_50vh imgLiquid imgLiquidFill cursor-pointer">
           <?php echo get_the_post_thumbnail($entradas[0]->ID,'thumb'); ?>

        </div>

      </div>

      <div class="small-9 columns p2 m0 h_10vh fontRS">
        <div class="vcenter">
           <?php echo apply_filters('the_excerpt',$entradas[0]->post_excerpt); ?>
        </div>
      </div>

      <div class="small-3 columns p2 m0 minH_10vh fontRM bold text-center">
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
             <div id="blog-thumb" class="columns h_30vh imgLiquid imgLiquidFill cursor-pointer">
               <?php echo get_the_post_thumbnail($entradas[$i+1]->ID,'thumb'); ?>
             </div>
           </div>

           <div id="blog-secundario-header" class="small-9 columns p2 m0 minH_10vh fontRM">
             <div class="vcenter">
                <?php echo apply_filters( 'the_title', get_the_title( $entradas[$i+1] -> ID )); ?>
             </div>
           </div>
           <div id="blog-secundario-header-fecha" class="small-3 columns p2 pl2 minH_10vh fontRS">
             <div class="vcenter">
               <?php echo get_the_date('d\.m\.Y', $entradas[$i+1]->ID ); ?>
             </div>
           </div>

           <div class="small-9 columns p2 m0 ha fontRS">
             <div class="vcenter">
                <?php echo apply_filters('the_excerpt',$entradas[$i+1]->post_excerpt); ?>
             </div>
           </div>

           <div class="small-3 columns p2 m0 minH_10vh fontRM bold text-center">
             <div class="vcenter">
               <span class="pr2">Ver más</span><i class="fa fa-plus"></i>
             </div>
           </div>


         </article>
       </a>
     <?php
  }

  ?>



</div>
