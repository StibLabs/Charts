<?php
include 'connect.php';

// Attempt select query execution
$sql = "SELECT * FROM btcedata";
if($result = mysqli_query($link, $sql)){

if(mysqli_num_rows($result) > 0){


$arr = array();
$volar = array();

while($row = mysqli_fetch_array($result)){
 







$thevar =  "{". "\""."date"."\"".":". "\"".$row['btctime']. "\"".","."\""."high"."\"".":"."\"".$row['btchigh']. "\"".",". "\""."low"."\"".":"."\"".$row['btclow']. "\"".",". "\""."close"."\"".":"."\"".$row['btcprice']. "\""."}".",";
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
<?php //echo btcprice($arr);?>
<script>
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataDateFormat":"JJ:NN",
  "valueAxes": [ {
    "position": "left"
  } ],
  "graphs": [ 


{"date": "18:31","high": "135.27","low": "128.30","close": "135.25"},
{"date": "18:32","high": "135.27","low": "128.30","close": "135.25"},
 ],
  "export": {
    "enabled": true,
    "position": "bottom-right"
  }
} );

chart.addListener( "rendered", zoomChart );
zoomChart();

// this method is called when chart is first inited as we listen for "dataUpdated" event
function zoomChart() {
  // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
  chart.zoomToIndexes( 10, 20 );
}
</script>



<script>

var chart = AmCharts.makeChart( "chartdiv3", {
  "type": "serial",
  "theme": "black",
  "dataDateFormat":"HH:MM",
  "valueAxes": [ {
    "position": "left"
  } ],
  "graphs": [ {
    "id": "g1",
    "proCandlesticks": true,
    "balloonText": "Low:<b>[[low]]</b><br>High:<b>[[high]]</b><br>Close:<b>[[close]]</b><br>",
    "closeField": "close",
    "fillColors": "#7f8da9",
    "highField": "high",
    "lineColor": "#7f8da9",
    "lineAlpha": 1,
    "lowField": "low",
    "fillAlphas": 0.9,
    "negativeFillColors": "#db4c3c",
    "negativeLineColor": "#db4c3c",
    "title": "Price:",
    "type": "hlc",
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