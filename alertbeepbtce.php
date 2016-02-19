<?php
include 'config.php';
// Attempt select query execution
$sql = "
SELECT * FROM (
    SELECT * FROM btcedata ORDER BY id DESC LIMIT 1
) sub
ORDER BY id ASC
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
    echo $value;

}
}
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){



$( "#myHigh" ).keyup(function(e) {

var key = e.which || e.keyCode;

if ( key == 8){}else{
nHigh = $( "#myHigh" ).val();
if (nHigh <= <?php echo btcprice($arr);?>) {
document.getElementById('play').play();
}else
{
document.getElementById('play').pause();
            return false;
}}
});


$( "#myLow" ).keyup(function() {
nLow = $( "#myLow" ).val();
if (nLow >= <?php echo btcprice($arr);?>) {
document.getElementById('play').play();
}else
{
document.getElementById('play').pause();
}
})


$('input:text').submit(
    function(){
        $(this).val('');
    });






});





</script>



<?php
echo "<form action=\"alertbeep.php\" method=\"POST\" >";
echo "<span class=\"smalltitle\">BTCE / USD ALERT</span>";
echo "<br><span class=\"smalltitle\"><label>High:</label></span><br>";
echo "<input id=\"myHigh\" type=\"text\"  name=\"high\" value=\"\" ><br>";
echo "<span class=\"smalltitle\"><label>Low:</label></span><br>";
echo "<input id=\"myLow\" type=\"text\"  name=\"low\" value=\"\" ><br>";
echo "<input type=\"submit\"  name=\"stopalarm\" value=\"Stop Alarm\" ><br>";
echo "</form>";
echo "<audio id=\"play\" src=\"beep.wav\" loop=\"loop\" ></audio>";


?>
