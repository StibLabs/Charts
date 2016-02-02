<?php
//BTC-E
$jsonbtce = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
$btceusd1 = $decodedbtce->btc_usd->last;
$thetime = $decodedbtce->btc_usd->updated;
$time = date('G:i:s', $thetime);
$btc1 = round($btceusd1,4);

$myFile = "btcechart.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "|".$time."|".$btc1;
fwrite($fh, $stringData);
fclose($fh);
$array = explode("\n", file_get_contents('btcechart.txt'));



$array2 = explode("|", file_get_contents('btcechart.txt'));
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
