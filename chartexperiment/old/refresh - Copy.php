<?php
//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");
error_reporting(0);
//BTC-E
$jsonbtce    = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
$btceusd1    = $decodedbtce->btc_usd->last;
$volumebtc    = $decodedbtce->btc_usd->volume;
$thetime     = $decodedbtce->btc_usd->updated;
$time        = date('G:i', $thetime);
$btc1        = round($btceusd1, 4);

$myFile = "btc.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "|" . $time . "|" . $btc1;
fwrite($fh, $stringData);
fclose($fh);
$array = explode("\n", file_get_contents('btc.txt'));



$array2 = explode("|", file_get_contents('btc.txt'));
$ary    = array_values(array_filter($array2));
//var_dump($ary);

// THE PRICE
function pricebtc($ary)
{

    $datatime = array();
    foreach ($ary as $key => $value) {
        if ($key % 2 == 0) {
            //echo $value;
            $datatime[] = $value;
            
        }
    }
   $datatime2 = array();
    for ($i = 0; $i < count($datatime); ++$i) {
        
        $bv = $i * 4;
        if (array_key_exists($bv, $datatime)) {
            if (is_null($datatime[$bv])) {
                
            } else {
               //echo $datatime[$bv]."<br>";
              $datatime2[] = $datatime[$bv];
            }
        }
    }
    //var_dump($datatime2);




$data2 = array();


    foreach ($ary as $key => $value) {
        if ($key % 2 != 0) {
            //echo $value . "<br>";
$btcval = $value;
           $data2[] = $btcval;
        }
    }

//var_dump($data2);
$pricebt = array_chunk($data2, 4);
//var_dump($pricebt);


foreach ($pricebt as $val) {
$val2 = implode(",", $val);
//echo $val2."<br>";
}




$out = array();
foreach ($pricebt as $key => $value){
    $out[] = array_merge((array)$datatime2[$key], (array)$value);
}


//var_dump($out);


foreach ($out as $key=>$val3 ) {

$val3max = max($val3[1], $val3[2], $val3[3], $val3[4]);
$val3min = min($val3[1], $val3[2], $val3[3], $val3[4]);
$thevar =  "{". "\""."date"."\"".":". "\"".$val3[0]. "\"".",". "\""."open"."\"".":". "\"".$val3[1]. "\"".",". "\""."high"."\"".":"."\"".$val3max. "\"".",". "\""."low"."\"".":"."\"".$val3min. "\"".",". "\""."close"."\"".":"."\"".$val3[4]. "\""."}".",";

var_dump($val3);


$vol = "{". "\""."date"."\"".":". "\"".$val3[0]. "\"".",". "\""."value"."\"".":". "\""."volume". "\""."}".",";




echo  $vol;
echo "<br><br>";

if ( empty($val3[0]) ) {
}
else if ( empty($val3[1]) ) {
}
else if ( empty($val3max) ) {
}
else if ( empty($val3min) ) {
}
else
{echo $thevar;}
  }
}


echo pricebtc($ary);
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

<?php echo pricebtc($ary);?>




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
    "marginLeft": 40,
    "autoMarginOffset": 20,
    "dataDateFormat": "YYYY-MM-DD",
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
          "drop":true,
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
        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
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
        "parseDates": true,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    },
    "dataProvider": [

{"date": "2012-07-27","value": 13}, 
{"date": "2012-08-19","value": 15}, 
{"date": "2012-08-20","value": 12}, 


]
});



</script>