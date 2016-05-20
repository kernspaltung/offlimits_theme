
// ready
$(document).ready(function(){

  //
  var u = new FrontEndUtils();
  u.vcenter();
  //
  $(".imgLiquidFill").imgLiquid();
  $('.imgLiquid.imgLiquidNoFill').imgLiquid({
    fill:false
  });
});
