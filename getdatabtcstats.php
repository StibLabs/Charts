<?php
include 'config.php';
$json = file_get_contents('https://blockchain.info/stats?format=json');
$decoded1 = json_decode($json);
// Store cache  
file_put_contents('btcmarquee.json', serialize($decoded1));  
// Retrieve cache  
$decoded1 = unserialize(file_get_contents('btcmarquee.json'));
$decoded = $decoded1;
$btcmarkprice = $decoded->market_price_usd;
$btchashrate = $decoded->hash_rate;
$btctotalfees = $decoded->total_fees_btc;
$btcnmined = $decoded->n_btc_mined;
$btcblocksmined = $decoded->n_blocks_mined;
$btctotalbtc = $decoded->totalbc;
$btctotalblocks = $decoded->n_blocks_total;
$btctradevol = $decoded->trade_volume_usd;
$btctransvol = $decoded->estimated_transaction_volume_usd;
$btcblocksize = $decoded->blocks_size;
$btcminersrev = $decoded->miners_revenue_usd;
$btcdifficulty = $decoded->difficulty;
$btctradevolbtc = $decoded->trade_volume_btc;
$btcsent = $decoded->total_btc_sent;
$minutesblocks = $decoded->minutes_between_blocks;





// Attempt insert query execution
$sql = "

INSERT INTO btcstats (
btcmarkprice, 
btchashrate, 
btctotalfees, 
btcnmined, 
btcblocksmined, 
btctotalbtc, 
btctotalblocks,
btctradevol,
btctransvol, 
btcblocksize, 
btcminersrev, 
btcdifficulty,
btctradevolbtc,
btcsent, 
minutesblocks
) 
VALUES (

'$btcmarkprice', 
'$btchashrate', 
'$btctotalfees',
'$btcnmined', 
'$btcblocksmined', 
'$btctotalbtc', 
'$btctotalblocks',
'$btctradevol',
'$btctransvol',
'$btcblocksize', 
'$btcminersrev',
'$btcdifficulty', 
'$btctradevolbtc',
'$btcsent',
'$minutesblocks'
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



