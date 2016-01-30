<?php 
sleep(10);
$json2 = file_get_contents('https://blockchain.info/stats?format=json');
$decodedbtc1 = json_decode($json2);


// Store cache  
file_put_contents('stats1.json', serialize($decodedbtc1));  
// Retrieve cache  
$decodedbtc1 = unserialize(file_get_contents('stats1.json'));
$decodedbtc = $decodedbtc1;



$btcmined = $decodedbtc->n_btc_mined;
$mpriceusd = $decodedbtc->market_price_usd;
$tvolusd = $decodedbtc->trade_volume_usd;
$tvolbtc = $decodedbtc->trade_volume_btc;





?>