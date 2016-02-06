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
btcavg CHAR(30) NOT NULL

)

";

if (mysqli_query($link, $sql)){
echo "<br>"."Table btcedata created successfully";
} else {
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);





?>



