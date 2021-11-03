$('.more').click(function(){
    $([document.documentElement, document.body]).animate({
        scrollTop: $('.innovation').offset().top
    }, 1000);
});
