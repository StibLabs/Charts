<?php
include 'config.php';

//BITFINEX
$jsonbtce    = file_get_contents('https://api.bitfinex.com/v1/pubticker/BTCUSD');
$decodedbtce = json_decode($jsonbtce);
//BTC-E PRICE
$btceusd1    = $decodedbtce->last_price;
$btc1  = round($btceusd1, 4);
$volumec    = $decodedbtce->volume;
$btcesell    = $decodedbtce->ask;
$btcebuy    = $decodedbtce->bid;
$btcehigh1    = $decodedbtce->high;
$btcehigh    = round($btcehigh1, 4);
$btcelow1    = $decodedbtce->low;
$btcelow    = round($btcelow1, 4);
$btceavg1    = $decodedbtce->mid;
$btceavg  = round($btceavg1, 4);
//TIME
$thetime     = $decodedbtce->timestamp;
$time        = date('G:i', $thetime);

$btcodata = array();
$sql = "SELECT * FROM bitfinexdata";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
$btceopen2 = $row['btcopen'];
$btcodata[] = $btceopen2;
}
mysqli_free_result($result);
} 
else{echo "No records matching your query were found"."<br>";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
foreach($btcodata as $btcval )
{
$btceopen = $btcval;
}


if (empty($btceopen)){

//echo "BTCOPEN EMPTY";
$btceopen = $btc1;


}
else
{

$thebtc1 = array();


$sql = "SELECT * FROM bitfinexdata";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_array($result)){
$btcopen3 = $row['btcopen'];
$btceopen = $btcopen3;

$thebtc = $row['btcprice'];
$thebtc1[] = $thebtc;

}
mysqli_free_result($result);
} 
else{echo "No records matching your query were found"."<br>";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


if (empty($z)){
$var30  = end($thebtc1);
$var31 = $var30;
$z = $var31;

}
else{
end($thebtc1);
$z = prev($thebtc1);
}
//var_dump($var30);
//var_dump($z);
//var_dump($btc1);


$btceopen = $z;




//echo "BTCOPEN NOT EMPTY";
}



// Attempt insert query execution
$sql = "

INSERT INTO bitfinexdata (

btctime, 
btcprice, 
btcvolumec, 
btcbuy,
btcsell, 
btclow, 
btchigh,
btcopen,
btcavg
) 
VALUES (

'$time', 
'$btc1', 
'$volumec', 
'$btcebuy', 
'$btcesell',
'$btcelow', 
'$btcehigh',
'$btceopen',
'$btceavg'
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

