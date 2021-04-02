jQuery.noConflict();

jQuery(function ($) {

    $(document).ready(function () {
        $('.sidenav').sidenav();

        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {
                var target = $(this.hash);
                var heightNav = $('nav').height();
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top-heightNav
                    }, 500);
                    return false;
                }
            }
        }); 

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

        setInterval(function() {
            $('.carousel.carousel-slider').carousel('next');
        }, 4500); 
    });     
});

//Change navbar color when scrolled
window.addEventListener('scroll', function(){
    let navbar = document.querySelector('.navbar');

    if(window.scrollY > 200) {
        navbar.classList.remove('navbar');
        navbar.classList.add('scrolling-navbar');        
    } else {
        navbar.classList.add('navbar');
        navbar.classList.remove('scrolling-navbar');
    }

});