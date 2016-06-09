<div class="small-12 columns minH_50vh">

  <?php

  $html = '';

  for ($i=1; $i < 7; $i++) {

    $html .=
    '<article id="faq" class="small-6 large-12 columns p3 minH_10vh">

      <div id="faq-titulo" class="vcenter fontRL bold p2">'

        . $i . ' ¿Lorem ipsum dolor sit amet, consectetur adipisicing elit. ?

        <div class="small-10 small-offset-1 fontRL p2">
          lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit.

          Lorem ipsum dolor sit amet, consectetur adipisicing elit.

        </div>

      </div>
    </article>';


  };

  echo $html;

  ?>



</div>
