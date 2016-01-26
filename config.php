<?php
$url = $_SERVER["REQUEST_URI"]; 
$json = file_get_contents('https://blockchain.info/en/ticker');
$decoded = json_decode($json);
//var_dump($decoded);
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