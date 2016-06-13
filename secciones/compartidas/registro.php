<!-- link regresa heroscreen -->
<div class="small-12 columns minH_10vh">
  <a href="#main" class="small-12 h_100">
    <div class="vcenterx fontRXXXL bold text-right">

      <i class="fa fa-angle-up bold mr1"></i>

    </div>
  </a>
</div>

<!-- contenido registro -->
<div class="small-12 columns minH_50vh">

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
         ?
      </div>

    </div>

    <!-- input rigistro form -->
    <div class="small-12 columns minH_50">

      <form action="" class="small-12 column p3" >

        <div class="row align-center">
          <div class="columns small-10 large-7 small-centered">
            <div class="small-12 column p2">
              <input type="text" class="h_100 m0" placeholder="Correo Electrónico">
            </div>

            <div class="small-12 column p2">
              <input type="submit" class="button small-12 h_100" value="Registro">
            </div>
          </div>

        </div>

      </form>

    </div>

  </div>
</div>
