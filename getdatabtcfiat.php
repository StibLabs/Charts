<?php
include 'config.php';
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

//BITCOINAVERAGE
$jsonbtcav = file_get_contents('http://api.bitcoincharts.com/v1/weighted_prices.json');
$decodedbtcav = json_decode($jsonbtcav);
$btcavg24 = $decodedbtcav->USD->{'24h'};



// Attempt insert query execution
$sql = "

INSERT INTO btcfiat (
btcusd, 
btceur, 
btcgbp, 
btccad, 
btcchf, 
btccny, 
btcaud, 
btcsgd,
btcjpy,
btcnzd, 
btcrub,
btctwd,
btcsek, 
btcthb,
btcpln,
btcisk,
btcavg24 
) 
VALUES (

'$usd', 
'$eur', 
'$gbp',
'$cad', 
'$chf', 
'$cny',
'$aud', 
'$sgd',
'$jpy',
'$nzd',
'$rub', 
'$twd',
'$sek', 
'$thb',
'$pln',
'$isk',
'$btcavg24'
)


";
if(mysqli_query($link, $sql)){
echo "";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);

?>



