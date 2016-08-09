</div>

<?php
global $mostrar_avisos;
if( $mostrar_avisos ) :

   get_template_part('secciones/compartidas/avisos_destacados');

endif;

?>

</div>

</main><!-- #main -->


<!-- footer + player -->

<footer class="w_100 expanded neutral_oscuro3_bg h_10vh p0 absDownL fixed z1k1">

   <!-- player -->
   <div class="small-12 large-5 columns h_100 h_md_50 hidden">

      <div class="shareW columns end p1 black_hover text-center">
         <i class="button fa fa-fast-backward neutral_oscuro3_bg acento_hover_bg black_hover p3"></i>
      </div>
      <div class="shareW columns end p1 black_hover text-center">
         <i class="button fa fa-play neutral_oscuro3_bg acento_hover_bg black_hover p3"></i>
      </div>
      <div class="shareW columns end p1 black_hover text-center">
         <i class="button fa fa-stop neutral_oscuro3_bg acento_hover_bg black_hover p3"></i>
      </div>
      <div class="shareW columns end p1 black_hover text-center">
         <i class="button fa fa-fast-forward neutral_oscuro3_bg acento_hover_bg black_hover p3"></i>
      </div>
      <div class="shareW columns end p1 black_hover text-center">
         <i class="button fa fa-random neutral_oscuro3_bg acento_hover_bg black_hover p3"></i>
      </div>
      <div class="shareW columns end p1 black_hover text-center">
         <i class="button fa fa-soundcloud neutral_oscuro3_bg acento_hover_bg black_hover p3"></i>
      </div>
      <div class="shareW columns end p1 black_hover text-center">
         <i class="button fa fa-angle-up neutral_oscuro3_bg acento_hover_bg black_hover p3"></i>
      </div>

   </div>

   <!-- redes footer -->
   <div class="small-12 large-5 large-2 columns h_100">
      <div class="small-3 columns h_100 text-center">
         <a href="https://es-la.facebook.com/offlimitsmx" target="_blank" class="w_100 h_100">
            <i class="fa fa-facebook vcenter fontXL white acento_hover"></i>
         </a>
      </div>

      <div class="small-3 columns h_100 text-center">
         <a href="https://www.instagram.com/offlimitsmx" target="_blank" class="w_100 h_100">
            <i class="fa fa-instagram vcenter fontXL white acento_hover"></i>
         </a>
      </div>

      <div class="small-3 columns h_100 text-center">
         <a href="https://twitter.com/offlimitsmx" target="_blank" class="w_100 h_100">
            <i class="fa fa-twitter vcenter fontXL white acento_hover"></i>
         </a>
      </div>

      <div class="small-3 columns h_100 text-center">

         <a href="<?php echo get_the_permalink(get_page_by_title('Contacto')->ID); ?>" target="_blank" class="w_100 h_100">
            <i class="fa fa-envelope vcenter fontXL white acento_hover"></i>
         </a>

      </div>

   </div>
</footer>






<?php wp_footer()?>

</body>
</html>
