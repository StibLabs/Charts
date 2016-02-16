<?php
include 'config.php';
// Attempt select query execution
$sql = "SELECT * FROM btcstats";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){


$btcmarkprice2 = array();
$btchashrate2 = array();
$btctotalfees2 = array();
$btcnmined2 = array();
$btcblocksmined2 = array();
$btctotalbtc2 = array();
$btctotalblocks2 = array();
$btctradevol2 = array();
$btctransvol2 = array();
$btcblocksize2 = array();
$btcminersrev2 = array();
$btcdifficulty2 = array();
$btctradevolbtc2 = array();
$btcsent2 = array();
$minutesblocks2 = array();






while($row = mysqli_fetch_array($result)){


$btcmarkprice1 =  $row['btcmarkprice'];
$btchashrate1 =  $row['btchashrate'];
$btctotalfees1 =  $row['btctotalfees'];
$btcnmined1 =  $row['btcnmined'];
$btcblocksmined1 =  $row['btcblocksmined'];
$btctotalbtc1 =  $row['btctotalbtc'];
$btctotalblocks1 =  $row['btctotalblocks'];
$btctradevol1 =  $row['btctradevol'];
$btctransvol1 =  $row['btctransvol'];
$btcblocksize1 =  $row['btcblocksize'];
$btcminersrev1 =  $row['btcminersrev'];
$btcdifficulty1 =  $row['btcdifficulty'];
$btctradevolbtc1 =  $row['btctradevolbtc'];
$btcsent1 =  $row['btcsent'];
$minutesblocks1 =  $row['minutesblocks'];


$btcmarkprice2[] = $btcmarkprice1;
$btchashrate2[] = $btchashrate1;
$btctotalfees2[] = $btctotalfees1;
$btcnmined2[] = $btcnmined1;
$btcblocksmined2[] = $btcblocksmined1;
$btctotalbtc2[] = $btctotalbtc1;
$btctradevol2[] = $btctradevol1;
$btctransvol2[] = $btctransvol1;
$btcblocksize2[] = $btcblocksize1;
$btcminersrev2[] = $btcminersrev1;
$btcdifficulty2[] = $btcdifficulty1;
$btctradevolbtc2[] = $btctradevolbtc1;
$btcsent2[] = $btcsent1;
$minutesblocks2[] = $minutesblocks1;



}


// Close result set
mysqli_free_result($result);
} else{echo "No records matching your query were found.";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);



$btcmarkprice = end($btcmarkprice2);
$btchashrate = end($btchashrate2);
$btctotalfees = end($btctotalfees2);
$btcnmined = end($btcnmined2);
$btcblocksmined = end($btcblocksmined2);
$btctotalbtc = end($btctotalblocks2);
$btctradevol = end($btctradevol2);
$btctransvol = end($btctransvol2);
$btcblocksize = end($btcblocksize2);
$btcminersrev = end($btcminersrev2);
$btcdifficulty = end($btcdifficulty2);
$btctradevolbtc = end($btctradevolbtc2);
$btcsent = end($btcsent2);
$minutesblocks = end($minutesblocks2);




echo "<div class=\"subst\" >";
echo "TRADE VOLUME (USD):<br>";  
echo "<span class=\"agreen\" >$btctradevol</span>";
echo "</div>";
echo "<div class=\"subst\" >";
echo "BTC MARKET PRICE:<br>";  
echo "<span class=\"agreen\" >$btcmarkprice</span>";
echo "</div>";
echo "<div class=\"subst\" >";
echo "BTC MINED:<br>";  
echo "<span class=\"agreen\" >$btcnmined</span>";
echo "</div>";




?>




