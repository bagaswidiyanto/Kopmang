(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 60
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    //Masonary
    $('.portfolio-details-pic').masonry({
        itemSelector: '.pdp-item',
        columnWidth: '.pdp-item'
    });


var cardSlider = new Swiper(".menu-populer-slider", {
    autoplay: {
		delay: 4000,
		disableOnInteraction: false
	},
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    slidesPerView: 4,
    spaceBetween: 30,
    breakpoints: {
        // when window is <= 767px
        767: {
        slidesPerView: 2,
        spaceBetween: 10,
        },
        // when window is <= 991px
        991: {
        slidesPerView: 2,
        spaceBetween: 30,
        },
    },
});

var cardSlider = new Swiper(".menu-coffee-slider", {
    autoplay: {
		delay: 4000,
		disableOnInteraction: false
	},
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    slidesPerView: 5,
    spaceBetween: 30,
    breakpoints: {
        // when window is <= 767px
        767: {
        slidesPerView: 3,
        spaceBetween: 10,
        },
        // when window is <= 991px
        991: {
        slidesPerView: 3,
        spaceBetween: 30,
        },
    },
});


var cardSlider = new Swiper(".testimonial-slider", {
    autoplay: {
		delay: 4000,
		disableOnInteraction: false
	},
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
        // when window is <= 767px
        767: {
        slidesPerView: 1,
        spaceBetween: 10,
        },
        // when window is <= 991px
        991: {
        slidesPerView: 1,
        spaceBetween: 30,
        },
    },
});


    // // Testimonials carousel
    // $(".testimonial-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1000,
    //     margin: 25,
    //     dots: false,
    //     loop: true,
    //     nav : true,
    //     navText : [
    //         '<i class="bi bi-chevron-left"></i>',
    //         '<i class="bi bi-chevron-right"></i>'
    //     ],
    //     responsive: {
    //         0:{
    //             items:1
    //         },
    //         992:{
    //             items:2
    //         }
    //     }
    // });
AOS.init();
    
})(jQuery);


