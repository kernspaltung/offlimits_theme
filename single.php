<?php

get_header();

if( have_posts() ) : while( have_posts() ) : the_post();

?>

<div id="single-blog-offlimits" class="small-12 columns pl0">

    <article class="small-12 columns p0">

      <div id="single-blog-offlimits-thumb" class="expanded row imgLiquidFill imgLiquid h_50vh w_100 mb1" >
         <?php echo get_the_post_thumbnail(); ?>
      </div>

      <div id="single-blog-offlimits-titlulo-fecha" class="small-12 columns p0 h_15vh">

        <div class="small-12 columns p2 text-left fontRXXL">
           <?php echo apply_filters('the_title', get_the_title() ); ?>
        </div>

        <div class="small-12 columns pt1 text-left fontL">
           <?php echo get_the_date('d\.m\.Y', get_the_ID() ); ?>
        </div>

      </div>

      <div id="single-blog-offlimits-contenido" class="small-12 medium-11 large-10 columns end columns fontRL text-left pt2">
        <?php echo apply_filters('the_content', get_the_content() ); ?>
      </div>


      <div id="single-blog-offlimits-compartir" class="small-12 columns p0 mb3">

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
