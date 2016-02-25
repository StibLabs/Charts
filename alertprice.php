<?php


include 'config.php';
// Attempt select query execution
$sql = "
SELECT * FROM ( SELECT * FROM btcedata ORDER BY id DESC LIMIT 1 ) sub ORDER BY id ASC
";








if($result = mysqli_query($link, $sql)){
if(mysqli_num_rows($result) > 0){
$arr = array();
while($row = mysqli_fetch_array($result)){
$thevar =  $row['btcprice'];
$arr[] = $thevar;

}
// Close result set
mysqli_free_result($result);
} else{echo "No records matching your query were found.";}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);




function btcprice($arr){
foreach($arr as $value) {
    echo $value.rand(0,3);

}
}


?>




<?php 

echo btcprice($arr); 




?>









