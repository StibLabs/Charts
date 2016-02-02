<?php
$page = $_SERVER['PHP_SELF'];
$sec = "30";
header("Refresh: $sec; url=$page");

//BTC-E
$jsonbtce = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
$btceusd1 = $decodedbtce->btc_usd->last;
$thetime = $decodedbtce->btc_usd->updated;
$time = date('G:i:s', $thetime);
$btc1 = round($btceusd1,4);

$myFile = "btc.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "|".$time."|".$btc1;
fwrite($fh, $stringData);
fclose($fh);
$array = explode("\n", file_get_contents('btc.txt'));



$array2 = explode("|", file_get_contents('btc.txt'));
$ary = array_values(array_filter($array2));
//var_dump($ary);


function pricebtc($ary) {
foreach($ary as $key => $value)
 {
   if($key%2 != 0){ 
     echo $value.",";
   }
 }
}


function timebtc($ary) {
  foreach($ary as $key => $value)
  {
  if($key%2 == 0){ 
echo "\"".$value."\" ".",";
    }
  }
}





?>



<!DOCTYPE HTML>
<html>

<head>  



</head>

  <body>
    <div id="canvasb"   style="width:50%;" >
<canvas id="canvas" ></canvas>
    </div>

 <script type="text/javascript" src="chart.js"></script>
  <script>

		var lineChartData = {
			labels: [<?php echo timebtc($ary);?>],
			datasets : [
				{
					label: "My First dataset",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",
					 data: [<?php echo pricebtc($ary);?>]
				},
				
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}


</script>










  </body>
</html>
