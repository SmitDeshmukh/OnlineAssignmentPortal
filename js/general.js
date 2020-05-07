/*DASH BOARD REQ FOR TEMP TOGGLE MENU*/
$(document).ready(function(){
$("a#mob-nav").click(function(){
$("div.mob-menu").slideToggle('fast');
return false;
});

$('a#show-project-a').click(function(){
   $('.overlay').fadeIn('fast');
   $('.project-container').fadeIn('normal');
   return false;
});

$('a#close-project-a').click(function(){
   $('.overlay').fadeOut('normal');
   $('.project-container').fadeOut('fast');
   return false;
});


});

$(window).scroll(function() {
    if ($(window).scrollTop() >= 100 ) {
        $('.top-index').addClass('top-bar-bg');
    } else {
        $('.top-index').removeClass('top-bar-bg');  
    }
});
