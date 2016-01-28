<?php 
include 'markets.php';
include 'marketsdelay.php';
include 'marketsdelay.php';
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





echo "<li><a href=\"\" >";
echo "<span class=\"txtlf\">BTC-E</span>";
echo "<span class=\"txtlr\" style=\"color:$color1;\" >$btcelusd USD</span>";
echo "<span class=\"arws\" style=\"color:$color1;\" >$arw1</span></a></li>";
echo "<li><a href=\"\" >";
echo "<span class=\"txtlf\">BITFINEX</span>";
echo "<span class=\"txtlr\" style=\"color:$color2;\" >$lfxusd USD</span>";
echo "<span class=\"arws\" style=\"color:$color2;\" >$arw2</span></a></li>";



?>