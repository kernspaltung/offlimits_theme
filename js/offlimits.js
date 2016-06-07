//mapa
var latLong = {lat: 13.3755498, lng: -98.1806603};
function initMap() {
  var mapDiv = document.getElementById('template-festival-map');
  var map = new google.maps.Map(mapDiv, {
    zoom: 4,
    center: latLong,
    // mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    navigationControl: true,
    mapTypeControl: true,
    draggable: false
  });
  var marker = new google.maps.Marker({
    position: latLong,
    map: map,
    title: 'Off Limits Festival'
  });
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
    arrows: false,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
    cssEase: 'swing',
    slidesToScroll: 1,
    slidesToShow: 1
  });

// mapa
initMap();

}); //fin ready
