<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<style>
#chartdiv {
	width		: 80%;
	height		: 500px;
	font-size	: 11px;
}	
#chartdiv2 {
	width	: 80%;
	height	: 250px;
}	

</style>
</head>
<body>
<div class="thephp" ></div>
<div id="chartdiv"></div>	
<div id="chartdiv2"></div>	
<script>
var updateInterval = setInterval(function() {
 $('.thephp').load('refresh.php');
},5000);
</script>









</body>
</html>