<?php 
//BTC-E
$jsonbtce = file_get_contents('https://btc-e.com/api/3/ticker/btc_usd');
$decodedbtce = json_decode($jsonbtce);
$btceusd = $decodedbtce->btc_usd->last;

//BTC-E
$jsonbtcelusd = file_get_contents('https://btc-e.com/api/3/ticker/ltc_usd');
$decodedbtce = json_decode($jsonbtcelusd);
$btcelusd = $decodedbtce->ltc_usd->last;


//BITFINEX
$jsonbfx = file_get_contents('https://api.bitfinex.com/v1/pubticker/BTCUSD');
$decodedbfx = json_decode($jsonbfx);
$bfxusd = $decodedbfx->last_price;


//BITFINEX
$jsonlfxe = file_get_contents('https://api.bitfinex.com/v1/pubticker/ltcusd');
$decodedbfx = json_decode($jsonlfxe);
$lfxusd = $decodedbfx->last_price;









?>