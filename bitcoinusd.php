<?php 
include 'config.php';

$btceusd5 = array();
$bfnxusd4 = array();
$btceusd12 = array();
$bfnxusd12 = array();

$sql = "SELECT * FROM btcedata";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){

$btceusd4 = $row['btcprice'];
$btceusd5[] = $btceusd4;

$btceusd13 = $row['btcopen'];
$btceusd12[] = $btceusd13;
}
mysqli_free_result($result);
} else{echo "No records matching your query were found.";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
$sql = "SELECT * FROM bitfinexdata";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){

$bfnxusd5 = $row['btcprice'];
$bfnxusd4[] = $bfnxusd5;

$bfnxusd13 = $row['btcopen'];
$bfnxusd12[] = $bfnxusd13;
}
mysqli_free_result($result);
} else{echo "No records matching your query were found.";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

$btceusd6 = end($btceusd5);
$bfnxusd6 = end($bfnxusd4);
$btceusd11 = end($btceusd12);
$bfnxusd11 = end($bfnxusd12);



$btceusd = $btceusd6;
$bfxusd = $bfnxusd6;

$btceusd2 = $btceusd11;
$bfxusd2 = $bfnxusd11;




if ( $btceusd >= $btceusd2  )
{
$arw1 = "&utrif;";
$color1 = "green"; 
}
else
{
$arw1 = "&dtrif;";
$color1 = "red";
}
if ( $bfxusd >= $bfxusd2  )
{
$arw2 = "&utrif;";
$color2 = "green"; 
}
else
{
$arw2 = "&dtrif;";
$color2 = "red";
}





echo "<li><a href=\"\" >";
echo "<span class=\"txtlf\">BTC-E</span>";
echo "<span class=\"txtlr\" style=\"color:$color1;\" >$btceusd USD</span>";
echo "<span class=\"arws\" style=\"color:$color1;\" >$arw1</span></a></li>";
echo "<li><a href=\"\" >";
echo "<span class=\"txtlf\">BITFINEX</span>";
echo "<span class=\"txtlr\" style=\"color:$color2;\" >$bfxusd USD</span>";
echo "<span class=\"arws\" style=\"color:$color2;\" >$arw2</span></a></li>";



?>