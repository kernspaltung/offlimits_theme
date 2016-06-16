<?php
$festival = get_page_by_title("Festival");
?>

<section id="festival-portada" class="small-12 columns p0 h_60vh h_sm_a">

   <header id="festival-header" class="small-12 columns p0 h_20vh h_sm_40vh rel mb_sm_4">

      <!-- festival-fondo header -->
      <div id="festival-header-fondo" class="columns imgLiquid imgLiquidFill h_100 w_100 absUpL z1" >
         <?php echo get_the_post_thumbnail( $festival -> ID, 'full' ); ?>
         <!-- <img class="" src="http://fakeimg.pl/420x380" alt="" /> -->
      </div>


      <!-- menu festival over header -->
      <div class="columns p0 absUpL z1 h_25vh h_sm_100">

         <div class="small-12 columns h_50">
            <div class="small-6 pt1 p0 fontRXXL">
               <h1 class="p0 txsh1">
                  <?php echo apply_filters( 'the_title', $festival->post_title); ?>
               </h1>
            </div>
         </div>

         <?php $secciones = array( 'Lineup', 'Boletos', 'Puntos de Venta', 'Foro' ); ?>

         <nav id="festival-header-menu" class="menu horizontal small-12 columns h_50 p0">
            <ul class="small-12 columns p0 m0 h_100 fontRXL text-left no-bullet p3">
               <?php
                  foreach ( $secciones as $seccion ) :

                  $link_seccion = "#festival-" . str_replace( " ", "_", strtolower( $seccion ) );

                  ?>
                  <li class=" h_50 f_l w_a end">
                     <a class="scrollLink p3 pt0 pl0 h_100  white txsh1" data-target="<?php echo $link_seccion; ?>" href="<?php echo $link_seccion; ?>">
                        <div class="vcenter fontL font_sm_M">
                           <?php echo $seccion; ?>
                        </div>
                     </a>
                  </li>
               <?php endforeach; ?>
            </ul>
         </nav>
      </div>

   </header>

   <section id="header-portada-introduccion" class="large-10 large-offset-1 columns end h_55vh p5 rel ">

      <?php
      $enlaces_rapidos = array();

      array_push( $enlaces_rapidos, get_page_by_title("Boletos") );
      array_push( $enlaces_rapidos, get_page_by_title("Puntos de Venta") );

      // $enlaces_rapidos = get_pages( array( 'child_of' => $enlaces_rapidos->ID, 'parent' => $enlaces_rapidos->ID, 'number' => 2 )  );

      $i=0;
      foreach ($enlaces_rapidos as $enlace_rapido ) :

         $link = obtener_link( $enlace_rapido -> ID );

         ?>

         <div class="small-12 medium-<?php echo $i==0 ? 7 : 5; ?> columns h_35vh h_sm_50vh <?php echo $i==0 ? 'pr0' : ''; ?> p5 p_sm_0 pb_sm_4 rel pt_sm_0">
            <div class="button small-12 columns neutral_oscuro2_bg h_100 p0">
               <a href="<?php echo $link; ?>" class="w_100 h_100">

                  <div class="small-12 <?php echo $i==0 ? 'medium-7 large-6' : 'medium-8 large-7'; ?>  columns h_100 text-left color p4 pb_sm_0">
                     <h5 class="acento sameMaxH mb1 h_20">
                        <?php

                           echo apply_filters( 'the_title', $enlace_rapido->post_title );

                        ?>
                     </h5>
                     <div class="fontS text-left h_70">
                        <div class="vcenter">

                           <?php echo apply_filters( 'the_excerpt', $enlace_rapido->post_excerpt ); ?>

                        </div>
                     </div>
                  </div>
                  <div class="small-12 <?php echo $i==0 ? 'medium-5 large-6' : 'medium-4 large-5'; ?> columns h_100 text-center color p4 pt_sm_0 p_sm_0 ">
                     <div class="w_100 h_100 imgLiquid imgLiquidNoFill ">
                        <?php echo get_the_post_thumbnail( $enlace_rapido->ID ); ?>
                     </div>
                  </div>

               </a>

            </div>
         </div>

         <?php $i++; endforeach; ?>


      </section>

   </section>
