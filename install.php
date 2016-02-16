<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create database query execution
$sql = "CREATE DATABASE Stibco";
if(mysqli_query($link, $sql)){
echo "Database Stibco created successfully";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);






/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "stibco");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Attempt create table query execution

$sql = "
CREATE TABLE btcedata(
id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
btctime CHAR(30) NOT NULL, 
btcprice CHAR(30) NOT NULL, 
btcvolume CHAR(30) NOT NULL, 
btcvolumec CHAR(30) NOT NULL, 
btcbuy CHAR(30) NOT NULL, 
btcsell CHAR(30) NOT NULL, 
btclow CHAR(30) NOT NULL, 
btchigh CHAR(30) NOT NULL,
btcopen CHAR(30) NOT NULL,
btcavg CHAR(30) NOT NULL

)
";

if (mysqli_query($link, $sql)){
echo "<br>"."Table btcedata created successfully";
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



$sql = "
CREATE TABLE bitfinexdata(
id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
btctime CHAR(30) NOT NULL, 
btcprice CHAR(30) NOT NULL, 
btcvolumec CHAR(30) NOT NULL, 
btcbuy CHAR(30) NOT NULL, 
btcsell CHAR(30) NOT NULL, 
btclow CHAR(30) NOT NULL, 
btchigh CHAR(30) NOT NULL,
btcopen CHAR(30) NOT NULL,
btcavg CHAR(30) NOT NULL

)
";

if (mysqli_query($link, $sql)){
echo "<br>"."Table bitfinexdata created successfully";
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}




$sql = "
CREATE TABLE btcstats(
id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
btcmarkprice CHAR(30) NOT NULL, 
btchashrate CHAR(30) NOT NULL, 
btctotalfees CHAR(30) NOT NULL, 
btcnmined CHAR(30) NOT NULL, 
btcblocksmined CHAR(30) NOT NULL, 
btctotalbtc CHAR(30) NOT NULL, 
btctotalblocks CHAR(30) NOT NULL,
btctradevol CHAR(30) NOT NULL,
btctransvol CHAR(30) NOT NULL, 
btcblocksize CHAR(30) NOT NULL, 
btcminersrev CHAR(30) NOT NULL, 
btcdifficulty CHAR(30) NOT NULL,
btctradevolbtc CHAR(30) NOT NULL,
btcsent CHAR(30) NOT NULL, 
minutesblocks CHAR(30) NOT NULL
)
";

if (mysqli_query($link, $sql)){
echo "<br>"."Table bitstats created successfully";
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}



$sql = "
CREATE TABLE btcfiat(
id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
btcusd CHAR(30) NOT NULL, 
btceur CHAR(30) NOT NULL, 
btcgbp CHAR(30) NOT NULL, 
btccad CHAR(30) NOT NULL, 
btcchf CHAR(30) NOT NULL, 
btccny CHAR(30) NOT NULL, 
btcaud CHAR(30) NOT NULL, 
btcsgd CHAR(30) NOT NULL,
btcjpy CHAR(30) NOT NULL,
btcnzd CHAR(30) NOT NULL, 
btcrub CHAR(30) NOT NULL,
btctwd CHAR(30) NOT NULL,
btcsek CHAR(30) NOT NULL, 
btcthb CHAR(30) NOT NULL,
btcpln CHAR(30) NOT NULL,
btcisk CHAR(30) NOT NULL,
btcavg24 CHAR(30) NOT NULL
)
";

if (mysqli_query($link, $sql)){
echo "<br>"."Table btcfiat created successfully";
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}





// Close connection
mysqli_close($link);





?>



