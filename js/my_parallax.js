$(window).scroll(function(e){
    parallax();
});
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.onasb').css('top',-(scrolled*0.1)+'px');
}