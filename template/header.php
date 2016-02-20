<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>YourSite</title>
<link rel="stylesheet" href="template/style.css" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('.nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>	
<script>

$(document).ready(function () {
    $('.left').click(function () {
        $('.container').animate({
            'left': '+=-3%'
        });
    });
    $('.right').click(function () {
        $('.container').animate({
            'left': '0px'
        });
    });    
});
</script>
<script>

$(function(){
    $('#select').click(function(){
        $('#sel-option').show();        
    });
    $('#sel-option a').click(function(e){
         $('#select').text($(this).text());
         $('#sel-option').hide(); 
        $(this).addClass('current');
        e.preventDefault();
    })
})
</script>


<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/black.js"></script>

 <script type="text/javascript" language="javascript" src="template/js/rssparser.js"></script>

<meta name="viewport" content="width=device-width">
</head>
<body>



<div class="top" >
<div class="logodiv" >
LOGO HERE
</div>
<div class="navb" >
<div class="thenav" >
	<div class="nav">

		<ul class="clearfix">
			<li class="home"><a href="index.php">HOME</a></li>
			<li><a  href="aboutus.html" >NEWS</a></li>
			<li><a href="portfolio.html">LOGIN</a></li>
			<li><a href="testimonials.html">SIGN UP</a></li>
		</ul>

		<a href="#" id="pull">MENU</a>
	</div>
</div>
<!-- END THE NAV -->




</div>
<!-- END NAVB -->
</div>
<!-- END TOP -->

<div class="subtop" >
<div class="infocf" >
BITCOIN / FIAT:
</div><!-- END INFOCF -->


<div class="crypto3" >
<div class="wrapper">
    <div class="container">
	
	


     <div class="crypto" ></div>
 
 
 
</div>
<!-- END CONTAINER -->
</div>
<!-- END WRAPPER -->

</div>
<!-- END CRYPTO3 -->






<div class="crypto2" >
<div class="left">&ltrif;</div>
<div class="right">&rtrif;</div>
</div>






</div>
<!-- END SUBTOP -->