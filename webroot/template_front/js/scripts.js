/*============================
   js index
==============================

==========================================*/

(function ($) {
    "use strict";

    /*================================
    Preloader
    ==================================*/
    var preloader = $('#preloader');
    $(window).on('load', function () {
        preloader.fadeOut('slow', function () { $(this).remove(); });

        // Load pie progress
        if ($(".pie_progress").length) {
            $('.pie_progress').asPieProgress('start');
        }
    });

    /*================================
    Humberger / Offset Menu
    ==================================*/
    var humberger = $('.humberger'),
        close_btn = $('.close-btn'),
        offset_wrapper = $('.offset-wrapper');
    humberger.on('click', function () {
        offset_wrapper.addClass('show_hide');
    });
    close_btn.on('click', function () {
        offset_wrapper.removeClass('show_hide');
    });

    /*================================
    stickey Header
    ==================================*/
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop(),
            mainHeader = $('.header-area');

        if (scroll > 1) {
            mainHeader.addClass("scrolled");
        } else {
            mainHeader.removeClass("scrolled");
        }
    });

    /*================================
    Magnific Popup
    ==================================*/
    $('.expand-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.expand-video').magnificPopup({
        type: 'iframe',
        gallery: {
            enabled: true
        }
    });

    /*================================
    Profesional skill progress-bar
    ==================================*/
    $('.pie_progress').asPieProgress({
        namespace: '',
        classes: {
            svg: 'pie_progress__svg',
            element: 'pie_progress',
            number: 'pie_progress__number',
            content: 'pie_progress__content'
        },
        min: 0,
        max: 100,
        goal: 100,
        size: 130,
        speed: 25, // speed of 1/100
        barcolor: '#12db8a',
        barsize: '10',
        trackcolor: '#232323',
        fillcolor: 'none',
        easing: 'ease',
        numberCallback: function numberCallback(n) {
            'use strict';

            var percentage = Math.round(this.getPercentage(n));

            return percentage + '%';
        },

        contentCallback: null
    });

    /*================================
    Software skill progress-bar
    ==================================*/
    $('.progress-bar').each(function (i) {
        setTimeout(function () {
            $('.progress-bar').eq(i).addClass('left-anim');
        }, (700 * (Math.exp(i * 0.14))) - 700);
    });

    /*================================
    slicknav
    ==================================*/
    $('ul#navigation').slicknav({
        prependTo: "#mobile-menu"
    });

    /*================================
    Masonary
    ==================================*/
    $('#container').imagesLoaded(function() {
        // filter items on button click
        $('.project-menu').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
        var $grid = $('.project-masonary').isotope({
            itemSelector: '.prt-item',
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.prt-item',
            }
        });
    });

    $('.project-menu button').on('click', function(event) {
        $(this).siblings('.active').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
    });



})(jQuery);