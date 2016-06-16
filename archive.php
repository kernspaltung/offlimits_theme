<?php
/*Template Name: Blog*/
get_header();
?>


<div id="archive-offlimits" class="small-12 columns pl0">


   <?php
   $prefiesta = get_term_by('name','Prefiesta','category');
   $args = array( 'category__not_in' => $prefiesta -> term_id, 'number_of_posts' => -1 );
   $q = new WP_Query( $args );
   if( $q -> have_posts() ) :
      endwhile( $q -> have_posts() ) :
         $q -> the_post();
         ?>

         <article class="small-12 medium-6 columns p0">
            <a href="<?php echo get_the_permalink(get_the_ID()); ?>">

               <div id="archive-offlimits-thumb" class="expanded row imgLiquidNoFill imgLiquid h_30vh w_100" >
                  <?php echo get_the_post_thumbnail(); ?>
               </div>

               <div id="archive-offlimits-titlulo-fecha" class="small-12 columns p0 h_10vh pl3 pr3">

                  <div class="small-7 columns p2 text-left fontRXL vcenter">
                     <?php echo apply_filters( 'the_title', get_the_title()); ?>
                  </div>

                  <div class="small-5 columns p2  text-right fontRM vcenter">
                     <?php echo get_the_date('d\.m\.Y', $avisos[0]->ID ); ?>
                  </div>

               </div>

               <div id="archive-offlimits-contenido" class="small-12 columns fontRM text-left p3 pl4 pr4">

                  <?php echo apply_filters( 'the_excerpt', get_the_excerpt()); ?>

               </div>
               <div id="archive-offlimits-contenido" class="small-12 columns fontRM text-left p3 pl4 pr4">
                  <span class="pr2">Ver más</span><i class="fa fa-plus"></i>
               </div>

            </a>
         </article>

         <?php

      endwhile;
   endif;

   ?>



</div>


<?php

get_footer();
?>
