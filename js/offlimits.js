


// ready

var u = new FrontEndUtils();

$(document).ready(function(){



   setup_utils();

   setup_interaccion();

   scrollToTarget();

   do_subsection_scroll( window.location.href );

   $(window).trigger('resize');

   // $('#header nav.menu').addClass('small-9');

   $('#header-icono-menu-movil').click(function(){
      if( $('#menu_movil').hasClass('hidden') ) {
         $('#menu_movil').css({
            opacity:0
         }).removeClass('hidden');
         $('#header-icono-menu-movil .fa').removeClass('fa-bars').addClass('fa-close');

         u.vcenter('#menu_movil .vcenter');

         $('#menu_movil').animate({
            opacity:1
         },400,function(){
         })
      } else {
         $('#menu_movil').animate({
            opacity:0
         },400,function(){
            $('#header-icono-menu-movil .fa').addClass('fa-bars').removeClass('fa-close');
            $('#menu_movil').addClass('hidden')
         })
      }

   })


   var fa = $('<span>').addClass('fa fa-facebook fontM pl1 pr1 white');
   $('.button-facebook').html( fa );

   fa = $('<span>').addClass('fa fa-twitter fontM pl1 pr1 white');
   $('.button-twitter').html( fa );


   $('#heroscreen-indicadorscroll').click(function(){
      $('html,body').animate({scrollTop: $(window).height()*0.8},1000);
   })

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
      centerPadding: '7vw',
      autoplay: true,
      autoplaySpeed: 3000,
      // cssEase: 'swing',
      slidesToShow: 1,
      slidesToScroll: 1,
      lazyLoad: 'ondemand',
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

         $(window).scroll();

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
      var link = $(this);
      // clear_cart();
      add_to_cart( preventa_id, function( key ){

         currentKey = key;
         set_cart_item_quantity( key, cantidad , function( result ) {

            setTimeout(function(){
               window.location = link.attr('href');
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

         $(window).scroll();
      }


   }

}

function do_subsection_scroll( url ) {

   partes_url = url.split("/");

   var num_partes_revisadas = 0;
   string_final = "";
   while( num_partes_revisadas < 2 ) {
      var siguiente_parte = partes_url.pop();

      if( siguiente_parte != "" ) {
         num_partes_revisadas++;
         if( string_final != "" )
            string_final = "-" + string_final.replace( " ", "_" );
         string_final = siguiente_parte + string_final;
      }
   }
   var targetId = "#" + string_final;


   var target = $(targetId);

   if( target.length > 0 ) {

      console.log( targetId );

       var offsetY = target.offset().top - $('#header').height();

      $('html,body').animate({
         scrollTop: offsetY
      }, 1000);

      $(window).scroll();

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
