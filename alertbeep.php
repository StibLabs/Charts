<?php
$var = "400";
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script>
$(document).ready(function(){



$( "#myHigh" ).keyup(function() {
nHigh = $( "#myHigh" ).val();
if (nHigh <= <?php echo $var;?>) {
document.getElementById('play').play();
}else
{
document.getElementById('play').pause();
}
});


$( "#myLow" ).keyup(function() {
nLow = $( "#myLow" ).val();
if (nLow >= <?php echo $var;?>) {
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


</head>
<body>

<form action="alertbeep.php" method="POST" >
<label>High:</label><br>
<input id="myHigh" type="text"  name="high" value="" ><br>
<label>Low:</label><br>
<input id="myLow" type="text"  name="low" value="" ><br>
<input type="submit"  name="stopalarm" value="Stop Alarm" ><br>
</form>
<audio id="play" src="beep.wav" loop="loop" ></audio>



</body>
</html>