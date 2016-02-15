<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "Stibco");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}



$url = $_SERVER["REQUEST_URI"]; 










?>