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

$(".logo").click(function(){
       $("body, html").animate({
           scrollTop: "0px"
       }, 300);

    });

$(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
        $(".logo").slideUp(300);
    } else {
        $(".logo").slideDown(300);
    }
});

$(".titulo_principal").click(function(){
    $("body, html").animate({
        scrollTop: "0px"
    }, 300);

 });

$(window).scroll(function(){
 if( $(this).scrollTop() > 0 ){
     $(".titulo_principal").slideDown(300);
 } else {
     $(".titulo_principal").slideUp(300);
 }
});


});