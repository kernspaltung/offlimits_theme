//mapa
var latLong = {lat: 19.4538898, lng: -99.2192209};
function initMap() {
   // var mapDiv = document.getElementById('template-festival-map');
   // var map = new google.maps.Map(mapDiv, {
   //    zoom: 14,
   //    center: latLong,
   //    // mapTypeId: google.maps.MapTypeId.ROADMAP,
   //    scrollwheel: false,
   //    navigationControl: true,
   //    mapTypeControl: true,
   //    draggable: true
   // });
   // var marker = new google.maps.Marker({
   //    position: latLong,
   //    map: map,
   //    title: 'Off Limits Festival'
   // });
};


// ready
$(document).ready(function(){

   //vcenter
   var u = new FrontEndUtils();
   u.vcenter();



   //scroll
   $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
         var target = $(this.hash);
         target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
         console.log(target.length + " " + target.offset());
         if (target.length) {
            // $('html, body').animate({
            $('#main').animate({
               scrollTop: target.offset().top
            }, 1000);
            return false;
         }
      }
   });

   //imgLiquid
   $(".imgLiquidFill").imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({
      fill:false
   });

   // lineup slider
   $('#lineup_galeria').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 500,
      // fade: true,
      centerMode: true,
      centerPadding: '10vw',
      autoplay: true,
      autoplaySpeed: 3000,
      // cssEase: 'swing',
      slidesToShow: 1,
      slidesToScroll: 1,
      responsive: [

         {
            breakpoint: 768,
            settings: {
               centerPadding: '1vw',
            }
         }
      ]
      });

      // mapa
      initMap();



      if( $('#heroscreen').length > 0 ) {

         setInterval( tiempo_faltante, 1000 );

         tiempo_faltante();

      }


      $(window).resize(function() {

         console.log( $(window).width() )

         if( $(window).width() <= 1024 ) {
            if( ! $('#avisos-destacados').hasClass('antes') ) {

               $('#avisos-destacados').detach().insertBefore('#area_contenidos')
               $('#avisos-destacados').addClass('antes')

            }

            if( $('#header nav').hasClass('large') ) {

               $('#header nav').removeClass('large').detach().appendTo('#offCanvasRight');

            }

         } else {

            if( $('#avisos-destacados').hasClass('antes') ) {

               $('#avisos-destacados').detach().insertAfter('#area_contenidos')
               $('#avisos-destacados').removeClass('antes')

            }

            if( ! $('#offCanvasRight nav').hasClass('large') ) {

               $('#offCanvasRight nav').addClass('large').detach().appendTo('#header');

            }

         }

      })

      $(window).trigger('resize');


   }); //fin ready











   var tiempo_faltante = function() {

      var un_segundo = 1000;
      var un_minuto = 60 * un_segundo;
      var una_hora = 60 * un_minuto;
      var un_dia = 24 * una_hora;

      var fecha_festival = new Date(2016, 8, 17, 12, 0, 0); ;
      var fecha_hoy = new Date();

      var diferencia_milisegundos = Math.abs( fecha_festival.getTime() - fecha_hoy.getTime() );

      var diferencia_dias = Math.floor( diferencia_milisegundos / ( un_dia ) );
      var diferencia_horas = Math.floor( diferencia_milisegundos / ( una_hora ) );
      var diferencia_minutos = Math.floor( diferencia_milisegundos / ( un_minuto ) );
      var diferencia_segundos = Math.floor( diferencia_milisegundos / ( un_segundo ) );

      var dias_restantes = diferencia_dias;
      var horas_restantes = diferencia_horas % 24;
      var minutos_restantes = diferencia_minutos % 60;
      var segundos_restantes = diferencia_segundos % 60;

      if( dias_restantes < 10 )
      dias_restantes = ("0" + dias_restantes).slice(-3)

      $('#heroscreen-contador-dias').html( dias_restantes );
      $('#heroscreen-contador-horas').html( ("0" + horas_restantes).slice(-2) );
      $('#heroscreen-contador-minutos').html( ("0" + minutos_restantes).slice(-2) );
      $('#heroscreen-contador-segundos').html( ("0" + segundos_restantes).slice(-2) );

   }
