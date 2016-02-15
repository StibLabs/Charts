$.ajaxSetup ({
    // Disable caching of AJAX responses */
    cache: false
});


var updateInterval = setInterval(function() {
 $('.thephp').load('selectdatabtce.php');
},20*1000);
var updateInterval = setInterval(function() {
 $('.thephp').load('getdatabtce.php');
},60*1000);

var updateInterval = setInterval(function() {
  $('.marketdatausd').load('bitcoinusd.php');
  $('.bpajax').load('bestprice.php');
},1*1000);

var updateInterval = setInterval(function() {
 $('.thephp2').load('selectdatabitfinex.php');
},60*1000);
var updateInterval = setInterval(function() {
 $('.thephp2').load('getdatabitfinex.php');
},60*1000);

var updateInterval = setInterval(function() {
 $('.crypto').load('selectdatabtcfiat.php');
},1*1000);

var updateInterval = setInterval(function() {
 $('.crypto').load('getdatabtcfiat.php');
},60*1000);


