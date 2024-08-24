(function($) {
    "use strict";

    jQuery(document).ready(function($) {
        // data - background
        $("[data-background]").each(function() {
            $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
        })

        // magnificPopup

        $('.popup-link-video').magnificPopup({
            type: 'video'
                // other options
        });

        // Home two slider
        $(".homepage-two-slider").owlCarousel({

            nav: false,
            dots: true,
            items: 1,
            autoplay: true,
            margin: 30,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
        });
        // Home two testimonial Carousel

        $(".home-two-testimonial-area-wrapper").owlCarousel({

            nav: false,
            dots: false,
            items: 1,
            autoplay: true,
            margin: 30,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
        });
        // Clients Carousel

        $(".cliens-logo-wrapper").owlCarousel({

            nav: false,
            dots: false,
            autoplay: true,
            margin: 30,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
            responsive: {
                1200: {
                    items: 5
                },
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                }
            }
        });
        // team Expert Carousel

        $(".team-expert-home-to-slider-list").owlCarousel({

            nav: true,
            dots: false,
            autoplay: true,
            margin: 30,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
            responsive: {
                1200: {
                    items: 3
                },
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                }
            }
        });

        // cta area slider
        $(".cta-slider-area").owlCarousel({

            nav: true,
            dots: false,
            autoplay: false,
            margin: 0,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
            responsive: {
                1200: {
                    items: 2
                },
                992: {
                    items: 2
                },
                768: {
                    items: 2
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                }
            }
        });

        // Home two shop slider
        $(".home-two-shop-wrapper").owlCarousel({

            nav: true,
            dots: false,
            autoplay: false,
            margin: 30,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
            responsive: {
                1200: {
                    items: 4
                },
                992: {
                    items: 3
                },
                768: {
                    items: 2
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                }
            }
        });


        // shop Carousel

        $(".shop-carousel-trigger").owlCarousel({

            nav: false,
            dots: true,
            autoplay: false,
            margin: 30,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
            responsive: {
                1300: {
                    items: 4
                },
                1200: {
                    items: 3
                },
                992: {
                    items: 2
                },
                768: {
                    items: 2
                },
                320: {
                    items: 1
                },
                480: {
                    items: 1
                }
            }
        });

        // review owlCarousel
        $(".single-review-area-wrapper").owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            autoplay: true,
            margin: 30,
            loop: true,
            navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
        });
        // testimonial owlCarousel
        $(".testimonial-area-wrapper").owlCarousel({
            items: 1,
            nav: false,
            dots: false,
            autoplay: false,
            loop: true,
            navText: ["<i class='fa fa-arrow-left'></i>", "<i class='fa fa-arrow-right'></i>"],
            mouseDrag: true,
            touchDrag: true,
        });
        // Isotop Trigger Menu

        $(".gallery-shorting-list-area li").click(function() {
            $(".gallery-shorting-list-area li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $(".gallery-area-list-wrapper-row").isotope({
                filter: selector
            });
            return false;
        });

        // Nice Select 
        $('select').niceSelect();


        // Gmap 3 Active
        $('.map')
            .gmap3({
                center: [23.626891, 90.507916],
                zoom: 13,
                scrollwheel: false,
            })
            .marker([
                { position: [23.626891, 90.507916] },
                { address: "86000 Poitiers, France" },
                { address: "66000 Perpignan, France", icon: "https://maps.google.com/mapfiles/marker_grey.png" }
            ])
            .on('click', function(marker) {
                marker.setIcon('https://maps.google.com/mapfiles/marker_green.png');
            });



        // One Page Nav
        $('#mainnavbar').onePageNav();

        // sticky
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll < 2) {
                $("#header_area").removeClass("sticky");
            } else {
                $("#header_area").addClass("sticky");
            }
        });

        // active menu class
        $(".navbar-toggler").click(function() {
            $(".header_area").toggleClass("active");
        });

        // active menu class
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            scrollDistance: 300, // Distance from top/bottom before showing element (px)
            scrollFrom: 'top', // 'top' or 'bottom'
            scrollSpeed: 900, // Speed back to top (ms)
            easingType: 'linear', // Scroll to top easing (see http://easings.net/)
            animation: 'fade', // Fade, slide, none
            animationSpeed: 200, // Animation speed (ms)
            scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
            scrollTarget: false, // Set a custom target element for scrolling to. Can be element or number
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
            scrollTitle: false, // Set a custom <a> title if required.
            scrollImg: false, // Set true to use image
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647 // Z-Index for the overlay
        });

        $('.scrool-to-top-btn a').on("click", function() {
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
            return false;
        });

        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });



    });


    jQuery(window).load(function() {

        // Isotop Trigger
        $(".gallery-area-list-wrapper-row").isotope();

    });


}(jQuery));