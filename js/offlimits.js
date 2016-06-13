


// ready

var u = new FrontEndUtils();

$(document).ready(function(){


   setup_utils();

   setup_interaccion();

   scrollToTarget();

   $(window).trigger('resize');


});


var resizing = false;
$(window).resize(function() {
   if( ! resizing ) {
      resizing = setTimeout(function(){
         do_resize();
         resizing = false;
      }, 150)
   }
})

function do_resize() {

   u.vcenter();
   u.shareW();
   u.sameMaxH( $('.sameMaxH') );


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

      $('#offCanvasRight').foundation('close');

   }

}


function setup_utils() {


   //vcenter
   u.vcenter();
   u.shareW();

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

}


function setup_interaccion() {

   $('a[href*="#"]:not([href="#"])').click(function() {

      var targetId = $(this).attr('href');
      var target = $(targetId);


      if ( target.length > 0 ) {

         var offsetY = target.offset().top - $('#header').height();

         $('html,body').animate({
            scrollTop: offsetY
         }, 1000);

      }

      return false;

   });

}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function scrollToTarget() {

   var scrollToId = getParameterByName( 'scrollTo' );

   if( scrollToId != null ) {

      var targetId = '#' + scrollToId;
      var target = $(targetId);

      if ( target.length > 0 ) {

         var offsetY = target.offset().top - $('#header').height();

         $('html,body').animate({
            scrollTop: offsetY
         }, 1000);

      }

   }


}


//mapa
var latLong = {lat: 19.4538898, lng: -99.2192209};
function initMap() {
   // var mapDiv = document.getElementById('festival-map');
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
