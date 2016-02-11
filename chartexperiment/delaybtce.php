<?php
sleep(10);
$jsonbtce2    = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce2 = json_decode($jsonbtce2);
$btcopen1  = $decodedbtce2->btc_usd->last;
$btcopen2  = round($btcopen1, 4);

?>