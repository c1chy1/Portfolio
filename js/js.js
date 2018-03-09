
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
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
        $(".menu").toggleClass("is-active");
        $( ".menu" ).slideToggle( "slow", function() {
        });
    });
    $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
    });
});

function pokaz() {
    document.getElementById("btn").style.opacity = "1";
    document.getElementById("btn").style.transition = "opacity 2s";
}

function niepokaz() {
    document.getElementById("btn").style.opacity = "0";
    document.getElementById("btn").style.transition = "opacity 7s";
}
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






