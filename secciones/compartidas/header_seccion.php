<?php

if( is_page("Inicio") ){ get_template_part('secciones/inicio/00-heroscreen'); }
if( is_page("Festival") || get_page_template_slug() == "offlimits_festival.php" ){ get_template_part('secciones/festival/00-portada'); }
