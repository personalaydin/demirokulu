import {animate, animateReset} from './animations';
import {GRID_GUTTER_WIDTH, mediaBreakpointDown, mediaBreakpointUp} from "./sass-helper";
import 'slick-carousel';

$(function() {
    'use strict';

    const SLICK_REFRESH_TIMEOUT = 50;

    const PROGRESSBAR_CLASS = 'slick-progressbar';

    let $carousels = $('.js-slick');

    if ($carousels.length === 0) {
        return;
    }

    $carousels.each(function () {
        let $carousel = $(this);

        $carousel.on('init', function(event, slick) {
            let $activeSlides = $('.slick-active', $carousel);

            $activeSlides.each(function(){
                let $currentSlide = $(this);

                animate($currentSlide);
            });

            if ($carousel.parents('.js-slick-overflow-full-with').length > 0) {
                setTimeout(slickOverflowFullWidthSlider, SLICK_REFRESH_TIMEOUT);
            }

            slidePagination($carousel, slick);
        });

        // Custom dots and arrows
        $('body').on('click', '[data-slick-go-to]', function() {
            // Custom dots
            let $this = $(this),
                $relatedCarousel = (typeof $this.attr('data-related-carousel') === undefined ? $this.parents('.js-slick') : $($this.attr('data-related-carousel')));

            $relatedCarousel.slick('slickGoTo', $this.attr('data-slick-go-to'));
        }).on('click', '[data-slick-next]', function() {
            // Custom arrows
            let $this = $(this),
                $relatedCarousel = (typeof $this.attr('data-related-carousel') === undefined ? $this.parents('.js-slick') : $($this.attr('data-related-carousel')));

            $relatedCarousel.slick('slickNext');
        }).on('click', '[data-slick-prev]', function() {
            // Custom arrows
            let $this = $(this),
                $relatedCarousel = (typeof $this.attr('data-related-carousel') === undefined ? $this.parents('.js-slick') : $($this.attr('data-related-carousel')));

            $relatedCarousel.slick('slickPrev');
        });

        // Before Change
        $carousel.on('beforeChange', function () {
            let $activeSlides = $('.slick-active', $carousel);

            $activeSlides.each(function(){
                let $currentSlide = $(this);

                animateReset($currentSlide);
            });
        });

        // After Change
        $carousel.on('afterChange', function (event,slick) {
            let $activeSlides = $('.slick-active', $carousel);

            $activeSlides.each(function(){
                let $currentSlide = $(this);

                animate($currentSlide);
            });

            slidePagination($carousel, slick);
        });

        initSlick($carousel);

        function initSlick($carousel) {
            $carousel.slick({
                'prevArrow': '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                'nextArrow': '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
            });

            if ($carousel.attr('data-slick-progressbar') === 'true') {
                progressBar($carousel);
            }
        }

        function slidePagination($carousel, slick) {
            $('[data-slick-pagination]').each(function () {
                let $this = $(this);

                if ($carousel.is($this.attr('data-related-carousel'))) {
                    let current = slick.currentSlide + 1;
                    let total = slick.slideCount;
                    $this.html(current.toString().concat(' / ', total));
                }
            });
        }

        // Slick overflow big slider
        function slickOverflowFullWidthSlider() {
            let $container = $('.js-slick-overflow-full-with');

            if ($container.length === 0) {
                return;
            }

            // Fix left - right spacing problem
            $container.css('margin-left', $container.offset().left * -1);

            // Next - Prev buttons position
            let $arrows = $('.slick-arrow', $container);
            $arrows.css('left', $('.slick-active').offset().left - 20);
        }

        $(window).on('resize', function () {
            // Reset margin before recalc
            let $container = $('.js-slick-overflow-full-with');
            $container.css('margin-left', 0);

            setTimeout(slickOverflowFullWidthSlider, SLICK_REFRESH_TIMEOUT * 3);
        });

        // Slick Carousel Progress Bar
        function progressBar($carousel) {
            let autoplaySpeed = 50,
                $bar,
                isPaused,
                timer,
                percent,
                carouselOptions = JSON.parse($carousel.attr('data-slick'));

            if (typeof carouselOptions.autoplaySpeed !== 'undefined') {
                autoplaySpeed = carouselOptions.autoplaySpeed / 1000;
            }

            // Add progressbar HTML codea after slick main element.
            $carousel.after(`<div class="${PROGRESSBAR_CLASS}"></div>`);

            // Get progressbar element as jQuery object
            $bar = $(`.${PROGRESSBAR_CLASS}`, $carousel.parent());

            // $('.main-slider__item .container', $carousel.parent()).on({
            //     mouseenter: function() {
            //         isPaused = true;
            //     },
            //     mouseleave: function () {
            //         isPaused = false;
            //     }
            // });

            function start() {
                reset();
                percent = 0;
                isPaused = false;
                timer = setInterval(function() {
                    if (isPaused === true) {
                        return;
                    }

                    percent += 1 / (autoplaySpeed + 0.1);
                    $bar.css({
                        width: percent+'%'
                    });

                    if (percent >= 100) {
                        $carousel.slick('slickNext');
                    }
                }, 10);
            }

            function reset() {
                $bar.css({
                    width: 0 + '%'
                });
                clearTimeout(timer);
            }

            start();

            // Reset and restart when slide changed
            $carousel.on('beforeChange', function (event,slick) {
                reset();
            });

            $carousel.on('afterChange', function (event,slick) {
                start();
            });
        }
    });
});
