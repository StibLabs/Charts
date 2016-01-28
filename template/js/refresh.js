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
  $('.thenews').load('news.php');
},1000);
var updateInterval = setInterval(function() {
$('.thenews').load('news.php');
},3600*1000);
