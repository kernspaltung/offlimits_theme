$(document).ready(function(){

   if( $('#heroscreen').length > 0 ) {

      setInterval( tiempo_faltante, 1000 );

      tiempo_faltante();

   }


});


function tiempo_faltante() {

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
