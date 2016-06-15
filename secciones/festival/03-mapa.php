<?php
   $foro = get_page_by_title("Foro");
?>
<!-- mapa como llegar -->
<section id="festival-mapa" class="small-12 columns p0 h_80vh h_md_70vh">


     <h1>
        <?php echo apply_filters( 'the_title', $foro -> post_title ); ?>
     </h1>


<!-- mapa aqui -->
  <div id="festival-map" class="small-6 columns h_40vh acento_bg"></div>

     <div id="festival-map-info" class="small-6 columns h_40vh">

       <div class="vcenter p0 fontL p5 pt0">
         <?php echo apply_filters( 'the_content', $foro -> post_content ); ?>
       </div>

     </div>

   </div>

</section>
