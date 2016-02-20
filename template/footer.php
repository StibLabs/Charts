<div class="footer" >
<div class="fb" >
<div class="copyc" >
&nbsp;&copy; 2016 OURWEBSITE.COM.ALL RIGHTS RESERVED
</div>
<div class="subnav" >
<label for="show-menu" class="show-menu">Show Menu</label>
<input type="checkbox" id="show-menu" role="button">

<ul id="menu">
	<li><a href="#">Home</a></li>
	<li>
			<a href="#">About</a>

	</li>
	<li><a href="#">News</a></li>
	<li><a href="#">Contact</a></li>
</ul>
</div>
<!-- END SUBNAV -->
<div class="social" >
<a href="" ><img src="template/images/f.png" alt="" /></a>
<a href="" ><img src="template/images/t.png" alt="" /></a>
<a href="" ><img src="template/images/g.png" alt="" /></a>
</div>
<!-- END SOCIAL -->





</div>
</div>
<!-- END FOOTER -->





<script src="template/js/refresh.js"></script>


<script>
$(document).ready(function () {


 $( '#alertbox' ).click(function() {
 $('#theal').slideToggle();
 });
});
</script>

<div id="theal" class="alertb" >
<?php include 'alertprice.php' ?>
<div class="abtce" >
<?php
echo "<form action=\"\" method=\"POST\" >";
echo "<span class=\"smalltitle\">BTCE / USD ALERT</span>"."<br>";
echo btcprice($arr);
echo "<br><span class=\"smalltitle\"><label>High:</label></span><br>";
echo "<input id=\"myHigh\" type=\"text\"  name=\"high\" value=\"\" ><br>";
echo "<span class=\"smalltitle\"><label>Low:</label></span><br>";
echo "<input id=\"myLow\" type=\"text\"  name=\"low\" value=\"\" ><br>";
echo "<input type=\"submit\"  name=\"stopalarm\" value=\"Stop Alarm\" ><br>";
echo "</form>";
echo "<audio id=\"play\" src=\"beep.wav\" loop=\"loop\" ></audio>";


?>
</div>
</div>



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


</body>
</html>