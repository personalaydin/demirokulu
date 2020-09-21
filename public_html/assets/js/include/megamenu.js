import {animate, animateReset} from './animations';

$(function() {
    'use strict';

    // Open when trigger clicked
    $('.js-open-mega-menu').on('click', function() {
        let $megaMenu = $('.services--menu[data-mega-menu="'+$(this).attr('data-mega-menu')+'"]');

        if ($('.services--menu').hasClass('services--open')) {
            return;
        }

        open($megaMenu);
    });

    $('.js-close-mega-menu').on('click', function() {
        if ($('.services--open').length) {
            close($('.services--open'));
        }
    });

    // Close when somewhere clicked
    $(document).on('click', function (e) {
        let $megaMenu = $('.services--open'),
            $target = $(e.target);

        if ($target.hasClass('js-open-mega-menu') ||
            $target.hasClass('services--menu') || $target.parents('.services--menu').length > 0
        ) {
            return;
        }

        close($megaMenu);
    });

    // Close when Escape key pressed
    $(document).keyup(function(e) {
        if (e.which === 27) { // Escape
            let $megaMenu = $('.services--open');

            close($megaMenu);
        }
    });

    function open($megaMenu) {
        let timeout = 0;

        // Before close all submenus
        if ($('.services--open').length) {
            close($('.services--open'));
            timeout = 300;
        }

        setTimeout(function () {
            $megaMenu.addClass('services--open');
            $megaMenu.removeClass('d-none');
            $megaMenu.addClass('d-flex');
            $('.js-open-mega-menu').addClass('header__bottom__menu__item--active');
            animate($megaMenu);
        }, timeout);
    }

    function close($megaMenu) {
        if ($megaMenu.length === 0) {
            return;
        }

        $megaMenu.removeClass('services--open');
        $megaMenu.removeClass('d-flex');
        $megaMenu.addClass('d-none');
        $('.js-open-mega-menu').removeClass('header__bottom__menu__item--active');
        animateReset($megaMenu);
    }
});