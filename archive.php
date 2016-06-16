<?php
/*Template Name: Blog*/
get_header();
?>


<section id="archive-offlimits" class="small-12 columns pl0">
   <h1>Blog</h1>


   <?php
   $prefiesta = get_term_by('name','Prefiesta','category');
   $args = array( 'category__not_in' => $prefiesta -> term_id, 'number_of_posts' => -1 );
   $q = new WP_Query( $args );
   if( $q -> have_posts() ) :
      while( $q -> have_posts() ) :
         $q -> the_post();
         ?>

         <article class="small-12 medium-6 columns p0 h_55vh h_sm_80vh p4">
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="white acento_hover">

               <div id="archive-offlimits-thumb" class="expanded row imgLiquidFill imgLiquid h_20vh w_100 mb2" >
                  <?php echo get_the_post_thumbnail(get_the_ID(),'thumb'); ?>
               </div>

               <div id="archive-offlimits-titulo-fecha" class="small-12 columns p0 mb1">

                  <div class="small-9 columns p0 text-left fontL">
                     <?php echo apply_filters( 'the_title', get_the_title()); ?>
                  </div>

                  <div class="small-3 columns p4 pt0  text-right fontRM">
                     <?php echo get_the_date('d\.m\.Y', $avisos[0]->ID ); ?>
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
   <h1>Prefiesta</h1>
   <?php


   $args = array( 'category__in' => $prefiesta -> term_id, 'number_of_posts' => -1 );
   $q = new WP_Query( $args );

   if( $q -> have_posts() ) :
      while( $q -> have_posts() ) :
         $q -> the_post();
         ?>

         <article class="small-12 medium-6 large-4 columns p0 h_55vh h_sm_80vh p4">
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>" class="white acento_hover">

               <div id="archive-offlimits-thumb" class="expanded row imgLiquidNoFill imgLiquid h_20vh w_100 mb2" >
                  <?php echo get_the_post_thumbnail(get_the_ID(),'thumb'); ?>
               </div>

               <div id="archive-offlimits-titulo-fecha" class="small-12 columns p0 mb1">

                  <div class="small-9 columns p0 text-left fontL">
                     <?php echo apply_filters( 'the_title', get_the_title()); ?>
                  </div>

                  <div class="small-3 columns p4 pt0  text-right fontRM">
                     <?php echo get_the_date('d\.m\.Y', $avisos[0]->ID ); ?>
                  </div>

               </div>


            </a>
         </article>

         <?php

      endwhile;
   endif;
   ?>

</section>


<?php

get_footer();
?>
