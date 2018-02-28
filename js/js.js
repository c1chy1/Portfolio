function openNav() {

    document.getElementById("mySidenav").style.width = "170px";
    document.getElementById("mySidenav").style.height = "auto";
    document.getElementById("mySidenav").style.opacity = 1;
    document.getElementById("chowaj").style.transition = "opacity 2s";
    document.getElementById("chowaj").style.opacity = 0 ;
    document.getElementById("opacity").style.opacity = 0.5;
    document.getElementById("opacity").style.transition = "opacity 1s";


}



function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("chowaj").style.transition = "opacity 2s";
    document.getElementById("chowaj").style.opacity = 1 ;
    document.getElementById("opacity").style.opacity = 1;
    document.getElementById("opacity").style.transition = "opacity 1s";

}

function pokaz() {


    document.getElementById("btn").style.opacity = "1";
    document.getElementById("btn").style.transition = "opacity 2s";

}

function niepokaz() {


    document.getElementById("btn").style.opacity = "0";
    document.getElementById("btn").style.transition = "opacity 7s";



}


$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 720);
                return false;
            }
        }
    });
});


var myElement = document.querySelector("#desk-nav");

var headroom  = new Headroom(myElement);

headroom.init();

var wow = new WOW(
    {
        boxClass:     'wow',
        animateClass: 'animated',
        mobile:       true,
        live:         true,
        callback:     function(box) {
        },
        scrollContainer: null
    }
);
wow.init();






