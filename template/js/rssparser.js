function parseRSS(url, container) {
  $.ajax({
    url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(url),
    dataType: 'json',
    success: function(data) {
      //console.log(data.responseData.feed);


      $.each(data.responseData.feed.entries, function(key, value){
        var thehtml = '<h3><a href="'+value.link+'" target="_blank">'+value.title+'</a></h3>';
        $(container).append(thehtml);
      });
    }
  });
}


function capitaliseFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}