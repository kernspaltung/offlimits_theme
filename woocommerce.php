<?php
get_header();

the_title();

if( have_posts() ): while ( have_posts() ): the_post();

   woocommerce_content();

endwhile; endif;

get_footer();
?>
