jQuery(function ($) {
    'use strict';
    $('.mean-menu').meanmenu({
        meanScreenWidth: '1199',
    });
    $(window).on('scroll', function () {
        $(window).scrollTop() >= 100 ? $('.main-navbar-area').addClass('stickyadd') : $('.main-navbar-area').removeClass('stickyadd');
    });
    $('a.nav-link').on('click', function (e) {
        var $this = $(this);
        $('html, body').stop().animate({
            scrollTop: $($this.attr('href')).offset().top - 60,
        }, 1000);
        e.preventDefault();
    });
    $('.language-link').on('click', function (e) {
        $('.language > .menu').toggle();
        e.preventDefault();
    });
    $('.youtube-popup').magnificPopup({
        disableOn: 320,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    $('.search-button').magnificPopup({
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        midClick: true
    });
    $('.banner-slider').owlCarousel({
        loop: false,
        margin: 0,
        items: 1,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
    });
    $('.strong-service-slider').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
            },
            991: {
                items: 2,
                autoWidth: true,
            },
        }
    });
    $('.finished-projects-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    $('.team-slider').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        autoplay: true,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 2,
                autoWidth: true,
            },
        }
    });
    $('.testimonial-slider').owlCarousel({
        loop: true,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        items: 1
    })
    $('.blog-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    $('.partner-slider').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        smartSpeed: 2000,
        margin: 30,
        autoplayHoverPause: true,
        autoplay: true,
        responsive: {
            0: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1024: {
                items: 4,
            },
            1200: {
                items: 6,
            },
        },
    });
    $('.instrument-slider').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        autoplay: true,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    $('.amazing-projects-slider').owlCarousel({
        loop: true,
        margin: 20,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 450,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 2,
                autoWidth: true,
            },
        }
    });
    $('.blog-details-slider').owlCarousel({
        loop: true,
        margin: 20,
        items: 1,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
    });
    $('.service-details-slider').owlCarousel({
        loop: true,
        margin: 20,
        items: 1,
        nav: true,
        navText: ["<i class='fas fa-caret-left'></i>", "<i class='fas fa-caret-right'></i>"],
        dots: false,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
    });
    $('body').append("<div class='go-top'><i class='fas fa-angle-double-up'></i></div>");
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 600) $('.go-top').addClass('active');
        if (scrolled < 600) $('.go-top').removeClass('active');
    });
    $('.go-top').on('click', function () {
        $('html, body').animate({
            scrollTop: '0',
        }, 500);
    });
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    var count = 1;
    var countEl = document.getElementById('count');
    $('#minus').on('click', function () {
        count--;
        countEl.value = count;
    })
    $('#plus').on('click', function () {
        count++;
        countEl.value = count;
    })
    $('.tab-item').on('click', function () {
        var tabModal = $(this).attr('data-tab');
        $(this).addClass('active').siblings().removeClass('active');
        $('.tab-panel[data-details=' + tabModal + ']').addClass('active').siblings().removeClass('active');
    })

    function makeTimer() {
        var endTime = new Date('September 20, 2021 17:00:00 PDT');
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < '10') {
            hours = '0' + hours;
        }
        if (minutes < '10') {
            minutes = '0' + minutes;
        }
        if (seconds < '10') {
            seconds = '0' + seconds;
        }
        $('#days').html(days + '<span>Days</span>');
        $('#hours').html(hours + '<span>Hours</span>');
        $('#minutes').html(minutes + '<span>Minutes</span>');
        $('#seconds').html(seconds + '<span>Seconds</span>');
    }
    setInterval(function () {
        makeTimer();
    }, 0);
    $('select').niceSelect();
    $(document).ready(function () {
        var slider = document.querySelector('.range-slider');
        var output = document.querySelector('.slider-value');
        $(slider).on('input', function () {
            var newValue = Number((slider.value - slider.min) * 100 / (slider.max - slider.min));
            var newPosition = 10 - (newValue * 0.6);
            output.innerHTML = `<span>${slider.value} ft</span>`;
            output.style.left = `calc(${newValue}% + (${newPosition}px))`;
        });
    })

    $(window).on('load', function (e) {
        $('.preloader-main').delay(100).queue(function () {
            $(this).remove();
        });
    });
}(jQuery));