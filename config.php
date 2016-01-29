<?php
$url = $_SERVER["REQUEST_URI"]; 
$json = file_get_contents('https://blockchain.info/en/ticker');
$decoded1 = json_decode($json);

// Store cache  
file_put_contents('btcmarquee.json', serialize($decoded1));  
// Retrieve cache  
$decoded1 = unserialize(file_get_contents('btcmarquee.json'));
$decoded = $decoded1;


$usd = $decoded->USD->last;
$eur = $decoded->EUR->last;
$gbp = $decoded->GBP->last;
$cad = $decoded->CAD->last;
$chf = $decoded->CHF->last;
$cny = $decoded->CNY->last;
$aud = $decoded->AUD->last;
$sgd = $decoded->SGD->last;
$jpy = $decoded->JPY->last;
$nzd = $decoded->NZD->last;
$rub = $decoded->RUB->last;
$twd = $decoded->TWD->last;
$sek = $decoded->SEK->last;
$thb = $decoded->THB->last;
$pln = $decoded->PLN->last;
$isk = $decoded->ISK->last;










?>