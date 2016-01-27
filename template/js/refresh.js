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
