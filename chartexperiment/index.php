<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
header("Refresh: $sec; url=$page");

//BTC-E
$jsonbtce = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
$btceusd1 = $decodedbtce->btc_usd->last;
$btceusd =  round($btceusd1,2);

$thetime = $decodedbtce->btc_usd->updated;
$time = date('G:i:s', $thetime);





$myFile = "btc.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $btceusd.",\n";
fwrite($fh, $stringData);
fclose($fh);
$array = explode("\n", file_get_contents('btc.txt'));
$btc = implode (", ", $array);









?>



<!DOCTYPE HTML>
<html>

<head>  
  <script type="text/javascript">

	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{

			title:{
				text: "Site Traffic",
				fontSize: 30
			},
                        animationEnabled: true,
			axisX:{

				gridColor: "Silver",
				tickColor: "silver",
				valueFormatString: "DD/MMM"

			},                        
                        toolTip:{
                          shared:true
                        },
			theme: "theme2",
			axisY: {
				gridColor: "Silver",
				tickColor: "silver"
			},
			legend:{
				verticalAlign: "center",
				horizontalAlign: "right"
			},
			data: [
			{        
				type: "line",
				showInLegend: true,
				lineThickness: 2,
				name: "Visits",
				markerType: "square",
				color: "#F08080",
				dataPoints: [

				{ x: 99, y:100  }
				]
			}
			

			
			],
          legend:{
            cursor:"pointer",
            itemclick:function(e){
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              	e.dataSeries.visible = false;
              }
              else{
                e.dataSeries.visible = true;
              }
              chart.render();
            }
          }
		});

chart.render();
}
</script>
  

  <script type="text/javascript" src="canvasjs.min.js"></script></head>
  <body>
    <div id="chartContainer" style="height: 300px; width: 100%;">
    </div>
  </body>
</html>
