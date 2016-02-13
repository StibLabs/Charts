<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/black.js"></script>

<style>
body
{
background:#000;
}
#chartdiv {
	width		: 80%;
	height		: 400px;
	font-size	: 11px;
}	
#chartdiv2 {
	width	: 80%;
	height	: 200px;
}	

</style>
</head>
<body>
<div class="thephp" ></div>
<div id="chartdiv"></div>	
<div id="chartdiv2"></div>	
<script>
var updateInterval = setInterval(function() {
 $('.thephp').load('selectdata.php');
},10*1000);
</script>
<script>
var updateInterval = setInterval(function() {
 $('.thephp').load('getdata.php');
},60*1000);
</script>








</body>
</html>