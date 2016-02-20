$.ajaxSetup ({
    // Disable caching of AJAX responses */
    cache: false
});


var updateInterval = setInterval(function() {
 $('.thephp').load('selectdatabtce1min.php');
},3*1000);

var updateInterval = setInterval(function() {
 $('.abtce').load('alertbeepbtce.php');
},58*1000);

var updateInterval = setInterval(function() {
 $('.thephpa').load('selectdatabtce1h.php');
},3*1000);


var updateInterval = setInterval(function() {
 $('.thephp2').load('selectdatabitfinex1min.php');
},3*1000);

var updateInterval = setInterval(function() {
 $('.thephpb2').load('selectdatabitfinex1h.php');
},3*1000);


var updateInterval = setInterval(function() {
 $('.thephp').load('getdatabtce.php');
},60*1000);




var updateInterval = setInterval(function() {
  $('.marketdatausd').load('bitcoinusd.php');
  $('.bpajax').load('bestprice.php');
},1*1000);


var updateInterval = setInterval(function() {
 $('.thephp2').load('getdatabitfinex.php');
},60*1000);

var updateInterval = setInterval(function() {
 $('.crypto').load('selectdatabtcfiat.php');
},1*1000);

var updateInterval = setInterval(function() {
 $('.crypto').load('getdatabtcfiat.php');
},60*1000);



var updateInterval = setInterval(function() {
 $('.stasbin').load('selectdatabtcstats.php');
},1*1000);

var updateInterval = setInterval(function() {
 $('.stasbin').load('getdatabtcstats.php');
},3600*1000);

