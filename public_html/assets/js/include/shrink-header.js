import {mediaBreakpointDown} from "./sass-helper";

$(function() {
    'use strict';

    const SHRINK_HEADER_CLASS = 'header--shrink';
    const HEADER_WRAPPER_ACTIVE_CLASS = 'header-wrapper__active';
    const SERVICES_MENU_SHRINK_SPACING = 'services--shrink';

    let $header = $('.header'),
        $headerWrapper = $('.header-wrapper'),
        $servicesMenuShrink = $('.services--menu');

    function shrinkHeader() {
        let windowScroll = $(window).scrollTop();

        if (windowScroll >= 10) {
            $header.addClass(SHRINK_HEADER_CLASS);
            $servicesMenuShrink.addClass(SERVICES_MENU_SHRINK_SPACING);

            if (mediaBreakpointDown('lg')) {
                $headerWrapper.addClass(HEADER_WRAPPER_ACTIVE_CLASS);
            }
        } else {
            $header.removeClass(SHRINK_HEADER_CLASS);
            $servicesMenuShrink.removeClass(SERVICES_MENU_SHRINK_SPACING);

            if (mediaBreakpointDown('lg')) {
                $headerWrapper.removeClass(HEADER_WRAPPER_ACTIVE_CLASS);
            }
        }
    }

    if (!$header.hasClass(SHRINK_HEADER_CLASS)) {
        shrinkHeader();
        $(window).scroll(shrinkHeader);
    }
});
