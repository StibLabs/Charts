$(document).ready(function () {
    $('.left').click(function () {
        $('.container').animate({
            'left': '+=-3%'
        });
    });
    $('.right').click(function () {
        $('.container').animate({
            'left': '0px'
        });
    });    
});