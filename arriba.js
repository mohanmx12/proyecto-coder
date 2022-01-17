$(document).ready(function(){
    $(".flecha_arriba").click(function(){
       $("body, html").animate({
           scrollTop: "0px"
       }, 300);

    });

$(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
        $(".flecha_arriba").slideDown(300);
    } else {
        $(".flecha_arriba").slideUp(300);
    }
});

});