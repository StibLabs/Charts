$.ajaxSetup ({
    // Disable caching of AJAX responses */
    cache: false
});
var updateInterval = setInterval(function() {
  $('.crypto').load('json.php');
},1000);
