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
$( '#closeal' ).click(function() {
 $('#theal').hide();
 });
 });
});
</script>

<div id="theal" class="alertb" >
<div class="abtce" >








<?php
echo "<form id=\"myform\" action=\"\" method=\"POST\" >";
echo "<span class=\"smalltitle\">BTCE / USD ALERT</span>"."<br>";
echo "<div id=\"thealert\" class=\"refreshalert\" >";



echo "</div>";
echo "<span class=\"smalltitle\"><label>High:</label></span><br>";
echo "<input id=\"myHigh\" type=\"text\"  name=\"high\" value=\"\" ><br>";
echo "<span class=\"smalltitle\"><label>Low:</label></span><br>";
echo "<input id=\"myLow\" type=\"text\"  name=\"low\" value=\"\" ><br><br>";
echo "<button type=\"button\" id=\"setal\"  >Set</button>&nbsp;<button type=\"button\" id=\"cleara\"  >Clear</button>&nbsp;<button type=\"button\" id=\"closeal\"  >Close</button><br>";
echo "</form>";
echo "<audio id=\"play\" src=\"beep.wav\" loop=\"loop\" ></audio>";
?>







<script>
$(document).ready(function(){

var price;
var updateInterval = setInterval(function() {
   $('#thealert').load('alertprice.php', function(){
    price = $('#thealert').html();
   });

},1*1000);




$( "#myHigh" ).keyup(function(e) {

var key = e.which || e.keyCode;

if ( key == 8){}else{


nHigh = $( "#myHigh" ).val();
$('#myHigh').append(nHigh);

if (nHigh <= change ) {
document.getElementById('play').play();
}else
{
document.getElementById('play').pause();
            return false;
}}
});


$( "#myLow" ).keyup(function() {
nLow = $( "#myLow" ).val();
if (nLow >= change ) {
document.getElementById('play').play();
}else
{
document.getElementById('play').pause();
}
})


$( '#cleara' ).click(function() {
        $('input:text').val('');
    });






});
</script>





</div>
</div>





</body>
</html>