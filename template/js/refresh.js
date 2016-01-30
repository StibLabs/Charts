$.ajaxSetup ({
    // Disable caching of AJAX responses */
    cache: false
});
var updateInterval = setInterval(function() {
  $('.crypto').load('json.php');
  $('.bpajax').load('bestprice.php');
  $('.bpajax2').load('bestpriceltc.php');
  $('.marketdatausd').load('bitcoinusd.php');
  $('.marketdataeur').load('litecoinusd.php');
},1000);

var updateInterval = setInterval(function() {
$('.btcebtctrades').load('btcetradesbtcusd.php');
},1000);

var updateInterval = setInterval(function() {
$('.btceltctrades').load('btcetradesltcusd.php');
},1000);