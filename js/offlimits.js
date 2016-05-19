
// ready
$(document).ready(function(){

  //
  u = new FrontEndUtils();
  u.vcenter();
  //
  $(".imgLiquidFill").imgLiquid();
  $('.imgLiquid.imgLiquidNoFill').imgLiquid({
    fill:false
  });
});
