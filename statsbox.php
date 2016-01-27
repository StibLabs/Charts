<?php 
$json2 = file_get_contents('https://blockchain.info/stats?format=json');
$decodedbtc = json_decode($json2);
$btcmined = $decodedbtc->n_btc_mined;
$mpriceusd = $decodedbtc->market_price_usd;
$tvolusd = $decodedbtc->trade_volume_usd;
$tvolbtc = $decodedbtc->trade_volume_btc;





?>