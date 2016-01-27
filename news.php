<?php
$jsrc = "https://ajax.googleapis.com/ajax/services/search/news?v=1.0&rsz=50&q=Bitcoin";
$json = file_get_contents($jsrc);
$jset = json_decode($json, true);

$x = 1;
while($x <= 6) {

echo "<div class=\"nbox\" >";
echo $jset["responseData"]["results"][$x]["content"];
echo "</div>";
$x++;

} 
 












?>