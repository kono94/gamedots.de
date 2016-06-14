$(window).load(function() {
    $('#preloader').delay(350).fadeOut('slow', function() {
        $('.team-page, .news-page, .contact-page').hide();
    });
});
$(document).ready(function() {
    'use strict';

    function homepageResponsive() {
        var windowsWidth = $(window).width(),
            windowsHeight = $(window).height();
        if (windowsWidth > windowsHeight) {
            $('.introduction , .menu').css({
                width: '50%',
                height: '100%'
            });
        } else {
            $('.introduction , .menu').css({
                width: '100%',
                height: '50%'
            });
        }
        var introWidth = $('.introduction').width(),
            introHeight = $('.introduction').height(),
            bgImage = $('.introduction').find('img');
        if (introWidth > introHeight) {
            bgImage.css({
                width: '100%',
                height: 'auto'
            });
        } else {
            bgImage.css({
                width: 'auto',
                height: '100%'
            });
        }
    }
    $(window).on('load resize', homepageResponsive);
    $('.menu > div').on('click', function() {
        var introWidth = $('.introduction').width(),
            menuWidth = $('.menu').width();
        $('.introduction').animate({
            left: '-' + introWidth
        }, 1000, 'easeOutQuart');
        $('.menu').animate({
            left: menuWidth
        }, 1000, 'easeOutQuart', function() {
            $('.home-page').css({
                visibility: 'hidden'
            });
        });
    });
    $('.menu div.team-btn').on('click', function() {
        $('.team-page').fadeIn(1200);
    });
    $('.menu div.news-btn').on('click', function() {
        $('.news-page').fadeIn(1200);
    });
    $('.menu div.member-btn').on('click', function() {
        $('.member-page').fadeIn(1200);
    });
    $('.menu div.contact-btn').on('click', function() {
        $('.contact-page').fadeIn(1200);
    });
    $('.close-btn').on('click', function() {
        $('.home-page').css({
            visibility: 'visible'
        });
        $('.introduction, .menu').animate({
            left: 0
        }, 1000, 'easeOutQuart');
        $('.team-page, .news-page, .member-page, .contact-page').fadeOut(800);
    });

    function maximizeHeight() {
        var minHeight = 0;
        $('.services').each(function() {
            var maxHeight = $(this).height();
            if (maxHeight > minHeight) {
                minHeight = maxHeight;
            }
        });
        $('.services').height(minHeight);
    }
    maximizeHeight();
    $(window).on('resize', maximizeHeight);
    $('.intro-content .social-media [data-toggle="tooltip"]').tooltip({
        placement: 'bottom'
    });
    $('.contact-details .social-media [data-toggle="tooltip"]').tooltip();
    $(function() {
        var fillColor = $('.footer').css('background-color');
        $('.skill').easyPieChart({
            barColor: fillColor,
            trackColor: '#c6c6c6',
            scaleColor: '#c6c6c6',
            scaleLength: 8,
            lineWidth: 8,
            size: 150,
            lineCap: 'butt'
        });
    });
    $(function() {
        $('#memberonis').mixItUp({
            callbacks: {
                onMixLoad: function(state) {
                    $('.member-page').hide();
                }
            }
        });
    });
    $(function() {
        $('.show-popup').popup({
            keepInlineChanges: true,
            speed: 500
        });
    });
    $(function() {
        $(".owl-carousel").owlCarousel({
            navigation: false,
            slideSpeed: 200,
            paginationSpeed: 300,
            singleItem: true
        });
    });
    $('#contactForm').submit(function() {
        $.ajax({
            type: "POST",
            url: "php/contact.php",
            data: $('#contactForm').serialize(),
            success: function(msg) {
                if (msg == 'SEND') {
                    $('.success').fadeIn();
                    $('.error').fadeOut();
                    $('#contactForm')[0].reset();
                } else {
                    $('.success').fadeOut();
                    $('.error').fadeIn().find('h3').text(msg);
                }
            }
        });
        return false;
    });
    $('#google-map').gMap({
        latitude: 31.562130,
        longitude: 74.319460,
        maptype: 'TERRAIN',
        scrollwheel: false,
        zoom: 14,
        markers: [{
            latitude: 31.562130,
            longitude: 74.319460,
            html: "I am Here!",
            icon: {
                image: "images/icon/map_marker.png",
                iconsize: [46, 46],
                iconanchor: [12, 46]
            }
        }],
        controls: {
            panControl: false,
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
    });
});