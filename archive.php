<?php
/*Template Name: Blog*/
get_header();
?>


<section id="archive-offlimits" class="small-12 columns pl0">
   <h1 class="p3 black_bg">Blog</h1>


   <?php
   $prefiesta = get_term_by('name','Prefiesta','category');
   $args = array( 'category__not_in' => $prefiesta -> term_id, 'number_of_posts' => -1 );
   $q = new WP_Query( $args );
   if( $q -> have_posts() ) :
      while( $q -> have_posts() ) :
         $q -> the_post();
         ?>

         <article class="small-12 medium-6 columns p0 h_55vh h_sm_80vh p4 black_hover_bg acento_hover_bd">
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="white ">

               <div class="small-12 columns pt0 text-right fontXS p0">
                  <div class="small-3 small-offset-9 columns black_bg p1 fontXS">
                     <?php echo get_the_date('d\.m\.Y', get_the_ID() ); ?>
                  </div>
               </div>
               <div id="archive-offlimits-thumb" class="small-12 columns imgLiquidFill imgLiquid h_20vh w_100 mb2" >
                  <?php echo get_the_post_thumbnail(get_the_ID(),'thumb'); ?>
               </div>

               <div id="archive-offlimits-titulo-fecha" class="small-12 columns p0 mb1">

                  <div class="small-9 columns p0 text-left fontL">
                     <?php echo apply_filters( 'the_title', get_the_title()); ?>
                  </div>


               </div>

               <div class="small-12 columns p0">
                  <div id="archive-offlimits-contenido" class="small-9 columns fontRM text-left p0">
                     <?php echo apply_filters( 'the_excerpt', wp_trim_words(get_the_excerpt(),17)); ?>
                  </div>
                  <div id="archive-offlimits-contenido" class="small-3 columns fontRM text-right p0 ">
                     <span class="pr1">Ver más</span><i class="fa fa-plus"></i>
                  </div>
               </div>

            </a>
         </article>

         <?php

      endwhile;
   endif;




   // prefiesta

   ?>
   <section id="blog-prefiesta" class="small-12 columns p0 mt2">

   <div class="small-12 columns mr1 mb2">
      <div class="h_15vh m0 p3 black_bg w_a f_l">
         <div class="vcenter">
            <h1 class="m0 p0">
                  Prefiesta
            </h1>
         </div>
      </div>
      <div class="h_15vh m0 p3 black_bg w_a f_l ml1 mb2">
         <div class="vcenter">
         <h4 class="m0 pt1">
               15 de abril, 2016
         </h4>
         </div>
      </div>
   </div>
   <?php


   $args = array( 'category__in' => $prefiesta -> term_id, 'number_of_posts' => -1 );
   $q = new WP_Query( $args );

   if( $q -> have_posts() ) :
      while( $q -> have_posts() ) :
         $q -> the_post();
         ?>

         <article class="small-12 medium-6 large-4 columns p0 h_50vh h_sm_80vh p4 black_hover_bg acento_hover_bd">
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="white">

               <div class="small-12 columns pt0  text-right  p0">
                  <div class="small-3 small-offset-9 columns black_bg p1 fontXS">
                     <?php echo get_the_date('d\.m\.Y', get_the_ID() ); ?>
                  </div>
               </div>
               <div id="archive-offlimits-thumb" class="small-12 columns imgLiquidFill imgLiquid h_25vh mb2" >
                  <?php echo get_the_post_thumbnail(get_the_ID(),'thumb'); ?>
               </div>

               <div id="archive-offlimits-titulo-fecha" class="small-12 columns p0 mb1">

                  <div class="small-12 columns text-center fontL">
                     <?php echo apply_filters( 'the_title', get_the_title()); ?>
                  </div>


               </div>


            </a>
         </article>

         <?php

      endwhile;
   endif;
   ?>
   </section>


</section>

<?php

get_footer();
?>
