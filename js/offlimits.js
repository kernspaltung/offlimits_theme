


// ready

var u = new FrontEndUtils();

$(document).ready(function(){



   setup_utils();

   setup_interaccion();

   scrollToTarget();

   $(window).trigger('resize');

   // $('#header nav.menu').addClass('small-9');


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
   if( $('#festival-map').length > 0 )
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


   $('a').click(function(){
      var targetID = getParameterByName('scrollTo', $(this).attr('href') );
      if( targetID && $('#'+targetID ).length ) {
         scrollToTarget( $(this).attr('href') );
         return false;
      }
   })

   $('#festival-boletos-compra input').val(1);

   $('#festival-boletos-compra input').change(function(){
      $('#festival-boletos-compra button').html("Compra "+$(this).val());
   });

   $('#festival-boletos-compra a').click(function(e){
      var preventa_id = "56";
      var cantidad = $('#festival-boletos-compra input').val();

      // clear_cart();
      add_to_cart( preventa_id, function( key ){

         currentKey = key;
         set_cart_item_quantity( key, cantidad , function( result ) {

            setTimeout(function(){
               window.location = $(this).attr('href');
            },1000)
         } );
       })

       e.preventDefault();
       e.stopPropagation();
   })

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

function scrollToTarget( url ) {

   var scrollToId = getParameterByName( 'scrollTo', url );

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
   var mapDiv = document.getElementById('festival-map');

      // if ( mapDiv.length > 0 ) {

      var map = new google.maps.Map(mapDiv, {
         zoom: 14,
         center: latLong,
         // mapTypeId: google.maps.MapTypeId.ROADMAP,
         scrollwheel: false,
         navigationControl: true,
         mapTypeControl: true,
         draggable: true
      });
      var marker = new google.maps.Marker({
         position: latLong,
         map: map,
         title: 'Off Limits Festival'
      });
   // }
};






function add_to_cart( id, callback ) {
	var ajaxData = {

		type: 'post',
		url: ol_ajax.ajaxurl,
		dataType: 'json',
		data: {
			action: 'add_to_cart',
			id: id
		},
		success: function(key){

         if( typeof(callback) != "undefined" ) {
				callback( key );
			}

		}


	};


	$.ajax(ajaxData);

}


function set_cart_item_quantity( key, quantity, callback ) {

	var ajaxData = {

		type: 'post',
		url: ol_ajax.ajaxurl,
		dataType: 'json',
		data: {
			action: 'set_cart_item_quantity',
			key: key,
			quantity: parseInt( quantity )
		},
		success: function(result){

			if( typeof(callback) != "undefined" )
				callback( result )

		}


	};


	$.ajax( ajaxData );



}

function clear_cart() {

	var ajaxData = {

		type: 'post',
		url: ol_ajax.ajaxurl,
		dataType: 'json',
		data: {
			action: 'clear_cart'
		},
		success: function() {

		}

	};

	$.ajax(ajaxData);


}
