<!-- contenido registro -->
<section class="small-12 columns minH_50vh">

  <!-- redes -->
  <div class="small-12 medium-10 large-8 medium-offset-1 large-offset-2 end columns p0 mt2 mb2 h_30 ">

    <div class="small-3 columns text-center h_100">
      <a href="#" class="white">
        <div class="vcenter">
          <i class="fa fa-facebook fontRL p3"></i>
          <p class="fontRS">offlimitsmx</p>
        </div>
      </a>
    </div>

    <div class="small-3 columns text-center h_100">
      <a href="#" class="white">
        <div class="vcenter">
          <i class="fa fa-instagram fontRL p3"></i>
          <p class="fontRS">@offlimitsmx</p>
        </div>
      </a>
    </div>

    <div class="small-3 columns text-center h_100">
      <a href="#" class="white">
        <div class="vcenter">
          <i class="fa fa-twitter fontRL p3"></i>
          <p class="fontRS">@OfflimitsMx</p>
        </div>
      </a>
    </div>

    <div class="small-3 columns text-center h_100">
      <a href="#" class="white">
        <div class="vcenter">
          <i class="fa fa-envelope fontRL p3"></i>
          <p class="fontRS">contacto@offlimits.mx</p>
        </div>
      </a>
    </div>

  </div>
  <!-- fin redes egistro -->

  <!-- registro -->
  <div class="small-12 columns p0 m0 h_70">

    <!-- contacto -->
    <div class="small-12 columns h_50 p2 text-center">

      <div class="columns p2 pl6 pr6 fontRM">

         <?php
         $registro = get_page_by_title("Registro");
         echo apply_filters( 'the_content', $registro -> post_content );
         ?>
      </div>

    </div>

  </div>
</section>
