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