<?php 

//BTC-E
$jsonbtce = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
$btceusd1 = $decodedbtce->btc_usd->last;

// Store cache  
file_put_contents('btcebtcusd.json', serialize($btceusd1));  
// Retrieve cache  
$btceusd1 = unserialize(file_get_contents('btcebtcusd.json'));
$btceusd = $btceusd1;

//BTC-E
$jsonbtcelusd = file_get_contents('https://btc-e.com/api/3/ticker/ltc_usd');
$decodedbtce = json_decode($jsonbtcelusd);
$btcelusd1 = $decodedbtce->ltc_usd->last;

// Store cache  
file_put_contents('btceltcusd.json', serialize($btcelusd1));  
// Retrieve cache  
$btcelusd1 = unserialize(file_get_contents('btceltcusd.json'));
$btcelusd = $btcelusd1;

//BITFINEX
$jsonbfx = file_get_contents('https://api.bitfinex.com/v1/pubticker/BTCUSD');
$decodedbfx = json_decode($jsonbfx);
$bfxusd1 = $decodedbfx->last_price;

// Store cache  
file_put_contents('bfxbtcusd.json', serialize($bfxusd1));  
// Retrieve cache  
$bfxusd1 = unserialize(file_get_contents('bfxbtcusd.json'));
$bfxusd = $bfxusd1;






//BITFINEX
$jsonlfxe = file_get_contents('https://api.bitfinex.com/v1/pubticker/ltcusd');
$decodedbfx = json_decode($jsonlfxe);
$lfxusd1 = $decodedbfx->last_price;


// Store cache  
file_put_contents('bfxltcusd.json', serialize($lfxusd1));  
// Retrieve cache  
$lfxusd1 = unserialize(file_get_contents('bfxltcusd.json'));
$lfxusd = $lfxusd1;






?>