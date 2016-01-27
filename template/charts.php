<?php include 'statsbox.php'; ?>
<?php include 'markets.php'; ?>
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
&nbsp;&nbsp;<span class="smalltitle" >SMALL DESCRIPTION HERE</span>
</div>
<div class="tright" >
<a href="" ><img src="template/images/settings.png" alt="" /></a>&nbsp;&nbsp;
</div>
</div>
<!-- END TITLEC -->
<div class="chartbox "  >
Chart BTC-E BITCOIN/USD<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div><!-- END CHARTBOX -->
</div>
<!-- END CHARTS -->




<div class="tab2 charts"  >
<div class="titlec" >
<div class="tleft" >
&nbsp;&nbsp;<span class="bigtitle" >BTC-E LITECOIN/USD</span><br>
&nbsp;&nbsp;<span class="smalltitle" >SMALL DESCRIPTION HERE</span>
</div>
<div class="tright" >
<a href="" ><img src="template/images/settings.png" alt="" /></a>&nbsp;&nbsp;
</div>
</div>
<!-- END TITLEC -->
<div class="chartbox "  >
Chart BTC-E LITECOIN/USD<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
&nbsp;&nbsp;<span class="smalltitle" >NEWS PROVIDED BY GOOGLE NEWS</span>
</div>
</div>
<!-- END TITLEC -->
<div class="tnews" >

<div class="tnb" >
<div class="hideb" >.</div>



<div class="thenews" >


</div>





</div><!-- END TNC -->





</div>






</div><!-- END LATESTNEWS -->

<div class="glossary" >
<div class="titlec" >
<div class="tleft" >
&nbsp;&nbsp;<span class="bigtitle" >TRADES INFO</span><br>
&nbsp;&nbsp;<span class="smalltitle" >SMALL DESCRIPTION HERE</span>
</div>
</div>
<!-- END TITLEC -->

<div class="tnews2" >
<div class="tnb" >


trades here

<div class="wikib" >
<a href="" >MORE INFO</a>
</div>


</div>
</div><!-- END GLOSSARY BOX -->





</div><!-- END GLOSSARY -->




</div><!-- END C2RIGHT -->

</div>
<!-- END CONTENT2 -->
