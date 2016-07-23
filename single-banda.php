<?php

get_header();

if( have_posts() ) : while( have_posts() ) : the_post();

?>

<div id="single-banda-offlimits" class="small-12 columns pl0">

    <article class="small-12 columns p0">
      <header class="small-12 columns p2 text-left">

      <h1 class="text-center fontHuge font_sm_XXL txsh2 mt3">
         <?php echo apply_filters('the_title', get_the_title() ); ?>
      </h1>
      </header>

      <div id="single-banda-thumb" class="expanded row imgLiquidFill imgLiquid h_50vh w_100 mb1" >
         <?php echo get_the_post_thumbnail(); ?>
      </div>

      <div id="single-banda-info">
         <?php
         $post_id = get_the_ID();
         $banda_lugar_de_origen = get_post_meta($post_id, "banda-lugar_de_origen", true );

         $banda_anno_formacion = get_post_meta($post_id, "banda-anno_formacion", true );

         $banda_genero_musical = get_post_meta($post_id, "banda-genero_musical", true );

         $banda_integrantes = get_post_meta($post_id, "banda-integrantes", true );

         $banda_enlaces = get_post_meta($post_id, "banda-enlaces", true );

         ?>


         <div class="columns medium-4 p4">

            <div class="pb1 fontM">
               <h6 class="mb0">Lugar de Origen:</h6>
               <span class="m0 p0 fontX">
                  <?php echo $banda_lugar_de_origen; ?>
               </span>
            </div>

            <div class="pb1 fontM">
               <h6 class="mb0">Año de Conformación:</h6>
               <span class="m0 p0 fontS">
                  <?php echo $banda_anno_formacion; ?>
               </span>
            </div>

            <div class="pb1 fontM">
               <h6 class="mb0">Género:</h6>
               <span class="m0 p0 fontS">
                  <?php echo $banda_genero_musical; ?>
               </span>
            </div>

         </div>


         <div class="columns medium-4 p4">

            <h6>Integrantes:</h6>

            <ul class="listado">
               <?php foreach( $banda_integrantes as $integrante ) : ?>
                  <li class="fontXS">
                     <?php echo $integrante; ?>
                  </li>
               <?php endforeach; ?>
            </ul>

         </div>

         <div class="columns medium-4 p4">

            <h6>Enlaces:</h6>

            <ul class="listado">
               <?php foreach( $banda_enlaces as $enlace ) : ?>
                  <li class="fontXS">
                     <a href="<?php echo $enlace; ?>" target="_blank">
                        <?php echo $enlace; ?>
                     </a>
                  </li>
               <?php endforeach; ?>
            </ul>

         </div>


      <div id="single-banda-contenido" class="contenido small-12 medium-8 medium-offset-1 columns end columns fontRL text-left pt1">
        <?php echo apply_filters('the_content', get_the_content() ); ?>
      </div>


      <!-- <div id="single-banda-compartir" class="small-12 columns p0 mb3">

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


      </div> -->


    </article>



</div>


<?php
endwhile; endif;

get_footer();
?>
