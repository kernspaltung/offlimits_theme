<!-- contenido registro -->
<section class="small-12 columns minH_50vh">

  <!-- redes -->
  <div class="small-12 columns p0 m0 h_30 ">
    <div class="small-4 columns text-center h_100">
      <a href="#">
        <div class="vcenter">
          <i class="fa fa-facebook fontRXXL"></i>
          <p class="fontRL">offlimitsmx</p>
        </div>
      </a>
    </div>

    <div class="small-4 columns text-center h_100">
      <a href="#">
        <div class="vcenter">
          <i class="fa fa-instagram fontRXXL"></i>
          <p class="fontRM">@offlimitsmx</p>
        </div>
      </a>
    </div>

    <div class="small-4 columns text-center h_100">
      <a href="#">
        <div class="vcenter">
          <i class="fa fa-twitter fontRXXL"></i>
          <p class="fontRM">@OfflimitsMx</p>
        </div>
      </a>
    </div>
  </div>
  <!-- fin redes egistro -->

  <!-- registro -->
  <div class="small-12 columns p0 m0 h_70">

    <!-- contacto -->
    <div class="small-12 columns h_50 p2 text-center">
      <a href="#">
      <i class="fa fa-envelope fontRXXL">&nbsp;&nbsp;<span class="fontRM">contacto@offlimits.mx</span></i>
      </a>
      <div class="columns p2 pl6 pr6 fontRM">

         <?php
         $registro = get_page_by_title("Registro");
         echo apply_filters( 'the_content', $registro -> post_content );
         ?>
      </div>

    </div>

  </div>
</section>
