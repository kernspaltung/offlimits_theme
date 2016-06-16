<?php

get_header();

?>


<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


   <div id="page-offlimits" class="small-12 columns pl0">

      <article class="small-12 columns p0">


         <div id="page-offlimits-titlulo-fecha" class="small-12 columns p0 h_15vh">

            <div class="small-7 columns p2 text-left fontRXXL vcenter">

               <h1>
                  <?php echo apply_filters('the_title', get_the_title()); ?>
               </h1>

            </div>
            <?php
            $img = get_the_post_thumbnail();
            if( $img ) : ?>
            <div id="page-offlimits-thumb" class="expanded row imgLiquidFill imgLiquid h_50vh w_100" >

               <?php echo $img; ?>

            </div>

         <?php endif; ?>

         </div>

         <div id="page-offlimits-contenido" class="small-12 columns fontRL text-left p3">

            <?php echo apply_filters('the_content', get_the_content()); ?>            

         </div>


         <div id="page-offlimits-compartir" class="small-12 columns p0 mb3">

            <ul id="merch-colores" class="menu horizontal small-12 columns mt2" end>

               <a href="">
                  <li class="small-12 columns p2 text-left fontRL bold p0">Comparte:&nbsp;</li>
               </a>
               <a href="">
                  <li class="small-3 columns p3 text-center "><i class="fa fa-facebook text-center vcenter fontRXL"></i></li>
               </a>
               <a href="">
                  <li class="small-3 columns p3 text-center "><i class="fa fa-twitter text-center vcenter fontRXL"></i></li>
               </a>
               <a href="">
                  <li class="small-3 columns p3 text-center"><i class="fa fa-instagram text-center vcenter fontRXL"></i></li>
               </a>
               <a href="">
                  <li class="small-3 columns p3 text-center "><i class="fa fa-reddit text-center vcenter fontRXL"></i></li>
               </a>

            </ul>


         </div>


      </article>



   </div>


   <?php
endwhile; endif;
get_footer();
?>
