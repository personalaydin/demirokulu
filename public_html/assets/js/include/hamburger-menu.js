import {animate, animateReset} from "./animations";

$(function() {
    'use strict';

    const HAMBURGER_MENU_BUTTON_ACTIVE_CLASS = 'is-active';
    const HAMBURGER_MENU_ACTIVE_CLASS = 'hamburger-menu--active';
    const HEADER_WRAPPER_ACTIVE_CLASS = 'header-wrapper__active';
    const HEADER_WRAPPER_SHRINK_CLASS = 'header--shrink hamburger-menu-bg-f8f8fb';

    function hamburgerMenu() {
        let $menuTrigger = $('.js-hamburger-menu-trigger');

        $menuTrigger.on('click', function () {
            let $hamburgerMenu = $('.hamburger-menu'),
                $headerWrapper = $('.header-wrapper');
                

            $menuTrigger.toggleClass(HAMBURGER_MENU_BUTTON_ACTIVE_CLASS);
            $headerWrapper.toggleClass(HEADER_WRAPPER_ACTIVE_CLASS);
            $hamburgerMenu.toggleClass(HAMBURGER_MENU_ACTIVE_CLASS);
            $('.header').addClass(HEADER_WRAPPER_SHRINK_CLASS);

            animateReset($hamburgerMenu);
            animate($hamburgerMenu, 'hamburgerMenu');
        });

        // DEBUG
        // $menuTrigger.click();
    }

    hamburgerMenu();
});
