(function($){
$(document).ready(function(){
    $("#otherBooths").click( function(){
        $('html, body').animate({
            scrollTop:$('#ourphotobooth').offset().top -50
        }, 500) 
    })

    $("#addedOptions").click( function(){
        $('html, body').animate({
            scrollTop:$('#addedOptions-content').offset().top -30
        }, 500) 
    })
    $(".banner-footer a").each(function(index, html){
        
        if(html) {
            const id= html.getAttribute('data-id');
            if( id) {
                $(this).click(function(){
                $('html, body').animate({
                    scrollTop:$('#'+ id).offset().top -50
                })
            })
            }
        }
        

    })
})
// ---------Sticky Header ----------//
$(window).scroll(function() {
if ($(this).scrollTop() > 200){  
$('header').addClass("sticky");
}
else{
$('header').removeClass("sticky");
}
});


// ------- Side Navbar Menu Toggle -----------//  
$("#menu-close").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#sidebar-wrapper").toggleClass("active");
});
  

$('.menu-item-has-children.dropdown').each(function(){
    var $_this = $(this);
    $_this.find('>a').append('<b class="caret"></b>');
    $_this.find('>a').click(function(e){
        e.preventDefault();
        $(this).parent().find('ul.dropdown-menu').slideToggle();
        $(this).parent().toggleClass('open show');
    })
})
  
 // -------- Different style of Photo Booths ----------//
if( $('.blog-thumb').length > 0 ){
$(".blog-thumb").hover(
function() {
$(this).find(".trainer-title").stop(true,true).fadeOut(200);
},
function() {
$(this).find(".trainer-title").stop(true,true).fadeIn(800);
}
);
} 
 
  
// ------- Different Size Booth ------- //
$('#boothssize').owlCarousel({
items: 1,
autoplay: true,
loop:true,
margin:0,
nav: true,
navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
slideSpeed: 300,
smartSpeed: 900
});


// ------- Inner Banner ------- //
$('#innerbanner').owlCarousel({
items: 1,
autoplay: true,
loop:true,
margin:0,
nav: true,
navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
slideSpeed: 300,
smartSpeed: 900
});


// ------ Booths Type ------------//
$('#boothstypes').owlCarousel({
loop: true,
margin:40,
nav: false,
autoplay: true,
autoHeight:true,
autoplaySpeed: 2000,
smartSpeed:1500,
dots: true,
paginationSpeed: 300,
rewindSpeed: 400,
responsiveClass: true,
responsive: {
0: {
items: 1
},
600: {
items: 2
},
768: {
items: 3
},
1000: {
items: 4
}
}
});


// ------ Photo Gallery ------------//
$('#photogallery').owlCarousel({
loop: true,
margin:30,
nav: false,
autoplay: true,
autoHeight:true,
autoplaySpeed: 2000,
smartSpeed:1500,
dots: true,
paginationSpeed: 300,
rewindSpeed: 400,
responsiveClass: true,
responsive: {
0: {
items: 1
},
600: {
items: 2
},
768: {
items: 3
},
1000: {
items: 4
}
}
});

// ------ Video Gallery ------------//
$('#videogallery').owlCarousel({
loop: true,
margin:30,
nav: false,
autoplay: true,
autoHeight:true,
autoplaySpeed: 2000,
smartSpeed:1500,
dots: true,
paginationSpeed: 300,
rewindSpeed: 400,
responsiveClass: true,
responsive: {
0: {
items: 1
},
600: {
items: 2
},
768: {
items: 2
},
1000: {
items: 3
}
}
});


// ------- Scroll Top ------- //
$(".back-top").hide();$('body').append("<div class='back-top' style='display:table; position:fixed; right:15px; bottom:0px; z-index:10; opacity:0.9; -webkit-opacity:0.9; -o-opacity:0.9; -moz-opacity:0.9; -ms-opacity:0.9;   display:none;'><a href='#' style='color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:20pt;display:block; font-weight:bold;text-align:center; line-height:15px; padding:5px 10px; border-radius:3px 3px 0px 0px; background-color:#e96150; border:1px solid;'><i class='fa fa-angle-up'></i></a></div>");$(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('.back-top').fadeIn();}else{$('.back-top').fadeOut();}});$('.back-top a').click(function(){$('body,html').animate({scrollTop:0},400);return false;});});

})(jQuery);