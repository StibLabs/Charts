<?php
include 'markets.php';
include 'marketsdelay.php';


if ($btceusd > $bfxusd){
$bestprice = "$btceusd";
$btcetxt = "BTC-E";

 if ( $btceusd >= $btceusd2  )
{
$arw1 = "&utrif;";
$color1 = "green";
}
else
{
$arw1 = "&dtrif;";
$color1 = "red";
}
$bestarw = $arw1;
$bestcolor = $color1;
}

else
{
$bestprice = "$bfxusd";
$btcetxt = "BITFINEX";
if ( $bfxusd >= $bfxusd2  )
{
$arw2 = "&utrif;";
$color2 = "green";
}
else
{
$arw2 = "&dtrif;";
$color2 = "red";
}
$bestarw = $arw2;
$bestcolor = $color2;
}

echo "BEST  BITCOIN PRICE:";
echo "<br>";
echo "<span class=\"bigtitle\" >$bestprice USD</span>";
echo "<span class=\"bigtitle\" style=\"color:$bestcolor;\" >$bestarw</span>";
echo "<span class=\"bigtitle\" >1.22%</span>";
echo "<br>";
echo $btcetxt;








?>