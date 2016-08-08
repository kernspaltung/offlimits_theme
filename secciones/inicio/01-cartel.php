<section class="w_100 h_50vh h_sm_60vh p5">

<div class="columns medium-6 h_100 p5">
   <div class="vcenter h_a text-center">
      <h2>Off Limits</h2>
      <h4>17 de septiembre, 2016</h4>
      <h5>Ciudad de México</h5>
      <a href="<?php echo get_the_permalink( get_page_by_title("Boletos")->ID ); ?>" class="button">
         Adquiere tus boletos.
      </a>
   </div>
</div>
<?php $imagen_url = wp_get_attachment_image_src( get_post_thumbnail_id( $cartel->ID ), 'single-post-thumbnail' ); ?>
<div class="imagen columns medium-6 h_100 imgLiquid imgLiquidNoFill mt_sm_4 mb_sm_4">
   <a href="<?php echo $imagen_url[0]; ?>" target="_blank">

      <?php echo get_the_post_thumbnail( get_page_by_title("Cartel")->ID, 'large'); ?>

   </a>

</div>

</section>
