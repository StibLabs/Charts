<?php
include 'markets.php';

if ($btcelusd > $lfxusd){
$bestprice = "$btcelusd";
$btcetxt = "BTC-E";
}
else
{
$bestprice = "$lfxusd";
$btcetxt = "BITFINEX";
}

echo "BEST  BITCOIN PRICE:";
echo "<br>";
echo "<span class=\"bigtitle\" >$bestprice USD</span>";
echo "<span class=\"bigtitle\" style=\"color:green;\" >&utrif;</span>";
echo "<span class=\"bigtitle\" >1.22%</span>";
echo "<br>";
echo $btcetxt;








?>