<?php
include 'connect.php';
//BTC-E
$jsonbtce    = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
//BTC PRICE
$btceusd1    = $decodedbtce->btc_usd->last;
$btc1        = round($btceusd1, 4);
$volumebtc    = $decodedbtce->btc_usd->vol;
$volumec    = $decodedbtce->btc_usd->vol_cur;
$btcesell    = $decodedbtce->btc_usd->sell;
$btcebuy    = $decodedbtce->btc_usd->buy;
$btcehigh1    = $decodedbtce->btc_usd->high;
$btcehigh    = round($btcehigh1, 4);
$btcelow1    = $decodedbtce->btc_usd->low;
$btcelow    = round($btcelow1, 4);
$btceavg    = $decodedbtce->btc_usd->avg;
//TIME
$thetime     = $decodedbtce->btc_usd->updated;
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

