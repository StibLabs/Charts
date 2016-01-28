<?php
include 'markets.php';
include 'marketsdelay.php';



if ($btcelusd > $lfxusd){
$bestprice = "$btcelusd";
$btcetxt = "BTC-E";

 if ( $btcelusd >= $btcelusd2  )
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
$bestprice = "$lfxusd";
$btcetxt = "BITFINEX";
if ( $lfxusd >= $lfxusd2  )
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

echo "BEST  LITECOIN PRICE:";
echo "<br>";
echo "<span class=\"bigtitle\" >$bestprice USD</span>";
echo "<span class=\"bigtitle\" style=\"color:$bestcolor;\" >$bestarw</span>";
echo "<span class=\"bigtitle\" >1.22%</span>";
echo "<br>";
echo $btcetxt;








?>