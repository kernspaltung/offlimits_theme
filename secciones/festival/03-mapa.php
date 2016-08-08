<?php
$foro = get_page_by_title("Foro");
?>
<!-- mapa como llegar -->
<section id="festival-foro" class="small-12 columns p5">


   <h1>
      <?php echo apply_filters( 'the_title', $foro -> post_title ); ?>
   </h1>


   <!-- mapa aqui -->
   <div id="festival-map" class="medium-6 columns h_40vh h_sm_30vh neutral_oscuro1_bg"></div>

   <div id="festival-map-info" class="medium-6 columns h_40vh h_sm_70vh mt_sm_3">
      <div id="festival-map-texto h_sm_100 h_a">

         <div class="vcenter p0 fontL p5 pt0">
            <?php echo apply_filters( 'the_content', $foro -> post_content ); ?>
         </div>

      </div>

   </div>

</div>

</section>
