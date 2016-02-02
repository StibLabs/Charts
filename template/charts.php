<?php include 'markets.php'; ?>
<?php include 'statsbox.php'; ?>
<?php include 'chartbtce.php'; ?>
<div class="content" >
<div class="dropdown" >

<div class="tab1 bestprice " >
<div class="cns bpajax" >

</div>
</div>
<!-- END PRICE -->

<div class="tab2 bestprice " >
<div class="cns bpajax2" >

</div>
</div>
<!-- END PRICE -->



<div class="sel-box">
<div class="sb" >
<div class="selectb" >
    <div id='select'>Select</div>
	<div class="subselect" ><span class="smalltitle" >SWITCH CURRENCY</span></div>
</div>  
<div class="sarw" >	&dtrif;</div>
</div>
	
	<ul class='toc-odd level-1 cad' id="sel-option" >

	  <li><a href=".tab1">BITCOIN/USD</a></li>
                  <li><a href=".tab2">LITECOIN/USD</a></li>

    </ul>
</div>


<script>
$(document).ready(function () {
   $("[class*='tab1']").show();
   $("[class*='tab2']").hide();
$('.cad a').click(function () {
   var tab_id = $(this).attr('href');    
   $("[class*='tab']").hide();
    $(tab_id).show();
  });
});
</script>



</div>
<!-- END SIDEBAR -->
<div class="tab1 charts"  >
<div class="titlec" >
<div class="tleft" >
&nbsp;&nbsp;<span class="bigtitle" >BTC-E BITCOIN/USD</span><br>
&nbsp;&nbsp;<span class="smalltitle" >
<script type="text/javascript">
<!--
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
document.write(month + "/" + day + "/" + year)
//-->
</script>
</span>
</div>
<div class="tright" >
<a href="" ><img src="template/images/settings.png" alt="" /></a>&nbsp;&nbsp;
</div>
</div>
<!-- END TITLEC -->



<div class="chartbox ">
<div class="chartboxx" style="width:100%;"><div style="width:98%;margin:8px auto;background:#000;"><div style="width:94%;margin-left:auto;margin-right:auto;background:#000;"><canvas id="canvas"></canvas>				

<script>

		var lineChartData = {
			labels: [<?php echo timebtc($ary);?>],
			datasets : [
				{
					label: "BTC-E CHART",
					fillColor : "rgba(220,220,220,0.2)",
					strokeColor : "rgba(220,220,220,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(220,220,220,1)",data: [<?php echo pricebtc($ary);?>]				},
				
			]

		}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}

</script></div></div></div>
</div><!-- END CHARTBOX -->






</div>
<!-- END CHARTS -->









</div>
<!-- END CONTENT -->


<div class="content2" >
<div class="c2left" >

<div class="tab1 market" >
<div class="markett" >
BITCOIN/USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
<img src="template/images/date.png" alt="" />
<script type="text/javascript">
<!--
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
document.write(month + "/" + day + "/" + year)
//-->
</script>
</div>
<ul class="marketdatausd" >
</ul>
</div>
<!-- MARKET 1 -->




<div class="tab2 market"  >
<div class="markett" >
LITECOIN/USD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
<img src="template/images/date.png" alt="" />
<script type="text/javascript">
<!--
var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
document.write(month + "/" + day + "/" + year)
//-->
</script>
</div>
<ul class="marketdataeur" >
</ul>
</div>
<!-- MARKET 2 -->




<div class="marketst" >
CLICK MARKET TO SEE CHART
</div>






<div class="tstats" >
<span class="bigtitle" >BITCOIN STATS</span>
</div><!-- TSTAS -->
<div class="stasbox" >
<div class="cns" >





<div class="subst" >
TRADE VOLUME (USD):<br>  
<span class="agreen" ><?php echo $tvolusd;?></span>
</div>
<div class="subst" >
TRADE VOLUME (BTC):<br>  
<span class="agreen" ><?php echo $tvolbtc;?></span>
</div>
<div class="subst" >
BTC MINED:<br>  
<span class="agreen" ><?php echo $btcmined;?></span>
</div>



<br>

<div class="wikib" >
<a href="" >MORE INFO</a>
</div>



</div><!-- CNS -->
</div><!-- STASBOX -->


























</div><!-- END C2LEFT -->


<div class="c2right" >
<div class="lnews" >
<div class="titlec" >
<div class="tleft" >
&nbsp;&nbsp;<span class="bigtitle" >LATEST NEWS</span><br>
&nbsp;&nbsp;<span class="smalltitle" >NEWS PROVIDED BY COINDESK</span>
</div>
</div>
<!-- END TITLEC -->
<div class="tnews" >

<div class="tnb" >
<div class="hideb" >.</div>



<div class="thenews" >
<div id="news"></div>



<script type="text/javascript">
$(function(){
  // running custom RSS functions
  parseRSS('http://feeds.feedburner.com/CoinDesk?format=xml', '#news');

});
</script>

</div>





</div><!-- END TNC -->





</div>






</div><!-- END LATESTNEWS -->

<div class="tab1 btcebtctrades glossary" >
</div>
<div class="tab2 btceltctrades glossary" >
</div>



</div><!-- END C2RIGHT -->

</div>
<!-- END CONTENT2 -->
