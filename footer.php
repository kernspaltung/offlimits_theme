</div>

<?php

if( ! is_page("Festival") && ! is_page("Información") ) :

   get_template_part('secciones/compartidas/avisos_destacados');

endif;

?>

</div>

</main><!-- #main -->


<!-- footer + player -->

<footer class="w_100 expanded neutral_oscuro3_bg h_10vh h_md_20vh p0 absDownL fixed">

   <!-- player -->
   <div class="small-12 large-5 columns h_100 h_md_50">

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
   <div class="small-12 large-5 large-2 columns fontRXXL h_100 h_md_50">
      <div class="small-3 columns h_100 text-center">
         <i class="fa fa-facebook vcenter"></i>
      </div>

      <div class="small-3 columns h_100 text-center">
         <i class="fa fa-instagram vcenter"></i>
      </div>

      <div class="small-3 columns h_100 text-center">
         <i class="fa fa-twitter vcenter"></i>
      </div>

      <div class="small-3 columns h_100 text-center">
         <i class="fa fa-envelope vcenter"></i>
      </div>

   </div>
</footer>






</div><!-- .off-canvas-content-->


</div><!-- off-canvas-wrapper-inner -->

</div><!-- off-canvas-wrapper-->


<?php wp_footer()?>

</body>
</html>
