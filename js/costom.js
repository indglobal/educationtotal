$(document).ready(function(){
    var s_id = $('#service_id').val();
    $.ajax({
            url:"<?php echo base_url(); ?>" + "pg",
            data:{service_id:s_id},
            type:'POST',
            success:function(result){
               var chart = AmCharts.makeChart( "chartdiv", {
            "type": "pie",
            "theme": "dark",
            "dataProvider": $.parseJSON(result),
            "valueField": "total_intake",
            "titleField": "degree_name",
            "outlineAlpha": 0.4,
            "depth3D": 15,
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "angle": 30,
            "export": {
              "enabled": true
            }
          } );
            }
        }); 
});
jQuery( '.chart-input' ).off().on( 'input change', function() {
  var property = jQuery( this ).data( 'property' );
  var target = chart;
  var value = Number( this.value );
  chart.startDuration = 0;

  if ( property == 'innerRadius' ) {
    value += "%";
  }

  target[ property ] = value;
  chart.validateNow();
} );