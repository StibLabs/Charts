<?php 
//BTC-E TRADES
$jsonbtcetrades = file_get_contents('https://btc-e.com/api/3/trades/btc_usd');
$decodedbtcet = json_decode($jsonbtcetrades);
$btcetrades1 = $decodedbtcet->btc_usd;


// Store cache  
file_put_contents('tradesbtcusd.json', serialize($btcetrades1));  
// Retrieve cache  
$btcetrades1 = unserialize(file_get_contents('tradesbtcusd.json'));
$btcetrades = $btcetrades1;


$ln2 = str_repeat('&nbsp;', 2);

echo "<div class=\"titlec\" >";
echo "<div class=\"tleft\" >";
echo "$ln2<span class=\"bigtitle\" >BTC-E BITCOIN/USD</span><br>";
echo "$ln2<span class=\"smalltitle\" >TRADES INFO</span>";
echo "</div>";
echo "</div>";
echo "<div class=\"tnews2\" >";
echo "<div class=\"tnb\" style=\"padding-top:15px;\" >";



for ($i = 6; $i--;)
{
$timestamp = $btcetrades[$i]->timestamp;
$time = date('G:i:s', $timestamp);
$amount = $btcetrades[$i]->amount;
$price = $btcetrades[$i]->price;
$type = $btcetrades[$i]->type;
echo "<div class=\"tradet\" >";

   echo "<div class=\"tradeb\" >";
    echo "<div class=\"tradebd\" >TRADE TIME:</div>";
    echo "<div class=\"tradebv\" >$time</div>";
 echo "</div>";

   echo "<div class=\"tradeb\" >";
    echo "<div class=\"tradebd\" >TYPE:</div>";
    echo "<div class=\"tradebv\" >$type</div>";
echo "</div>";

   echo "<div class=\"tradeb\" >";
    echo "<div class=\"tradebd\" >PRICE:</div>";
    echo "<div class=\"tradebv\" >$price</div>";
echo "</div>";

   echo "<div class=\"tradeb\" >";
    echo "<div class=\"tradebd\" >AMOUNT:</div>";
    echo "<div class=\"tradebv\" >$amount</div>";
echo "</div>";




echo "</div>";
}




echo "</div>";
echo "</div>";

?>