<?php
include 'connect.php';

// Attempt select query execution
$sql = "SELECT * FROM btcedata";
if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){


//$data = array($row['btctime'],$row['btcprice'],$row['btcvolume'],$row['btcvolumec'],$row['btcbuy'],$row['btcsell'],$row['btclow'],$row['btchigh'],$row['btcavg'],);
//var_dump($data);

$thevar =  "{". "\""."date"."\"".":". "\"".$row['btctime']. "\"".",". "\""."open"."\"".":". "\"".$row['btctime']. "\"".",". "\""."high"."\"".":"."\"".$row['btchigh']. "\"".",". "\""."low"."\"".":"."\"".$row['btclow']. "\"".",". "\""."close"."\"".":"."\"".$row['btcprice']. "\""."}".",";
$vol = "{". "\""."date"."\"".":". "\"".$row['btctime']. "\"".",". "\""."value"."\"".":". "\"".$row['btcvolume']. "\""."}".",";


echo $thevar."<br>";
echo $vol."<br>";

}






// Close result set
mysqli_free_result($result);
} else{echo "No records matching your query were found.";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);

















?>