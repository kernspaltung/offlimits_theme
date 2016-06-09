<li class="small-12 columns accordion-item" data-accordion-item>

  <a href="#" class="accordion-title fontRXXL">Reglamento</a>

  <div class="accordion-content" data-tab-content>

    <?php

    $html = '';

    for ($i=1; $i < 7; $i++) {

      $html .=
      '<div class="small-6 large-12 columns p3 minH_10vh">

      <div class="vcenter fontRL bold p2">'

      . $i . ' Lorem ipsum dolor sit amet, consectetur adipisicing elit.

      <p class="fontRL p2">lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit.

      Lorem ipsum dolor sit amet, consectetur adipisicing elit.

      </p>

      </div>
      </div>';


    };

    echo $html;

    ?>



  </div>

</li>
<!-- primer acordeon -->
