<?php
include 'connect.php';

// Attempt select query execution
$sql = "SELECT * FROM btcedata";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){


$arr = array();
$volar = array();

while($row = mysqli_fetch_array($result)){
//$data = array($row['btctime'],$row['btcprice'],$row['btcvolume'],$row['btcvolumec'],$row['btcbuy'],$row['btcsell'],$row['btclow'],$row['btchigh'],$row['btcavg'],);
//var_dump($data);

$openpriceavg  = $row['btcavg']*4;
$openp = $row['btcprice']+$row['btchigh']+$row['btclow'];
$openprice1 = $openpriceavg-$openp;
$openprice = round($openprice1,3);

$thevar =  "{". "\""."date"."\"".":". "\"".$row['btctime']. "\"".",". "\""."open"."\"".":". "\"".$openprice. "\"".",". "\""."high"."\"".":"."\"".$row['btchigh']. "\"".",". "\""."low"."\"".":"."\"".$row['btclow']. "\"".",". "\""."close"."\"".":"."\"".$row['btcprice']. "\""."}".",";
$vol = "{". "\""."date"."\"".":". "\"".$row['btctime']. "\"".",". "\""."value"."\"".":". "\"".$row['btcvolume']. "\""."}".",";

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

var chart = AmCharts.makeChart( "chartdiv", {
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
    "fillColors": "#7f8da9",
    "highField": "high",
    "lineColor": "#7f8da9",
    "lineAlpha": 1,
    "lowField": "low",
    "fillAlphas": 0.9,
    "negativeFillColors": "#db4c3c",
    "negativeLineColor": "#db4c3c",
    "openField": "open",
    "title": "Price:",
    "type": "candlestick",
    "valueField": "close"
  } ],
  "chartScrollbar": {
    "graph": "g1",
    "graphType": "line",
    "scrollbarHeight": 30
  },
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
var chart = AmCharts.makeChart("chartdiv2", {
    "type": "serial",
    "theme": "light",
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
        "cursorColor":"#258cbb",
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