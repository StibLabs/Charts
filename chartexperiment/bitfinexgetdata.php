https://live.amcharts.com/new/edit/

<?php
include 'connect.php';
//BTC-E
$jsonbtce    = file_get_contents('https://api.bitfinex.com/v1/pubticker/BTCUSD');
$decodedbtce = json_decode($jsonbtce);
//BTC-E PRICE
$btceusd1    = $decodedbtce->last_price;
$btc1        = round($btceusd1, 4);
$volumebtc    = $decodedbtce->volume;
$volumec    = $decodedbtce->volume;
$btcesell    = $decodedbtce->ask;
$btcebuy    = $decodedbtce->bid;
$btcehigh1    = $decodedbtce->high;
$btcehigh    = round($btcehigh1, 4);
$btcelow1    = $decodedbtce->low;
$btcelow    = round($btcelow1, 4);
$btceavg    = $decodedbtce->mid;
//TIME
$thetime     = $decodedbtce->timestamp;
$time        = date('G:i', $thetime);







// Attempt insert query execution
$sql = "

INSERT INTO btcedata (

btctime, 
btcprice, 
btcvolume,
btcvolumec, 
btcbuy,
btcsell, 
btclow, 
btchigh,
btcavg
) 
VALUES (

'$time', 
'$btc1', 
'$volumebtc',
'$volumec', 
'$btcebuy', 
'$btcesell',
'$btcelow', 
'$btcehigh', 
'$btceavg'
)


";
if(mysqli_query($link, $sql)){
echo "";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);










?>

