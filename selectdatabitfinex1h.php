<?php
include 'config.php';
// Attempt select query execution
$sql = "


SELECT * FROM bitfinexdata WHERE (id % 60) = 0; # even


";




if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){


$arr = array();
$volar = array();
$btcopen = array();


while($row = mysqli_fetch_array($result)){







$thevar =  "{". "\""."date"."\"".":". "\"".$row['btctime']. "\"".",". "\""."open"."\"".":". "\"".$row['btcopen']. "\"".",". "\""."high"."\"".":"."\"".$row['btchigh']. "\"".",". "\""."low"."\"".":"."\"".$row['btclow']. "\"".",". "\""."close"."\"".":"."\"".$row['btcprice']. "\""."}".",";
$vol = "{". "\""."date"."\"".":". "\"".$row['btctime']. "\"".",". "\""."value"."\"".":". "\"".$row['btcvolumec']. "\""."}".",";

$arr[] = $thevar;
$volar[] = $vol;


}








// Close result set
mysqli_free_result($result);
} else{echo "No records matching your query were found.";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);

function btcprice($arr){
foreach($arr as $value) {
    echo $value;

}
}
function volume($volar){
foreach($volar as $value2) {
    echo $value2;

}
}




?>





<script>
var chart = AmCharts.makeChart( "chartdivb3", {
  "type": "serial",
  "theme": "black",
  "dataDateFormat":"HH:MM",
  "valueAxes": [ {
    "position": "left"
  } ],
  "graphs": [ {
    "id": "g1",
    "proCandlesticks": true,
    "balloonText": "Open:<b>[[open]]</b><br>Low:<b>[[low]]</b><br>High:<b>[[high]]</b><br>Close:<b>[[close]]</b><br>",
    "closeField": "close",
    "fillColors": "#44F0FC",
    "highField": "high",
    "lineColor": "#44F0FC",
    "lineAlpha": 0.3,
    "lowField": "low",
    "fillAlphas": 1,
    "negativeFillColors": "#FC4444",
    "negativeLineColor": "#FC4444",
    "openField": "open",
    "title": "Price:",
    "type": "candlestick",
    "valueField": "close"
  } ],

  "chartCursor": {
    "valueLineEnabled": true,
    "valueLineBalloonEnabled": true
  },
  "categoryField": "date",
  "categoryAxis": {
    "parseDates": false
  },
  "dataProvider": [ 

<?php echo btcprice($arr);?>




],
  "export": {
    "enabled": true,
    "position": "bottom-right"
  }
} );


</script>


<script>

var chart = AmCharts.makeChart("chartdivb4", {
    "type": "serial",
    "theme": "black",
    "marginRight": 40,
    "marginLeft": 85,
    "autoMarginOffset": 20,
    "dataDateFormat": "HH:MM",
    "valueAxes": [{
        "id": "v1",
        "axisAlpha": 0,
        "position": "left",
        "ignoreAxisWidth":true
    }],
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "graphs": [{
        "id": "g1",
        "balloon":{
          "drop":false,
          "adjustBorderColor":false,
          "color":"#ffffff"
        },
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 5,
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "title": "red line",
        "useLineColorForBulletBorder": true,
        "valueField": "value",
        "balloonText": "<span style='font-size:12px;'>[[value]]</span>"
    }],
   
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha":1,
        "cursorColor":"#FFFFFF",
        "limitToGraph":"g1",
        "valueLineAlpha":0.2
    },

    "categoryField": "date",
    "categoryAxis": {
        "parseDates": false,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    },
    "dataProvider": [

<?php echo volume($volar);?>


]
});



</script>