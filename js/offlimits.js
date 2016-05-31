
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
        $('#contenido-informacion').animate({
          scrollTop: target.offset().top
        }, 500);
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

}); //fin ready
