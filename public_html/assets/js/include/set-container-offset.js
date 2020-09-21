import {containerOffset, wrapperOffset} from "./container-offset";
import {mediaBreakpointDown, mediaBreakpointUp} from "./sass-helper";

$(function() {
    'use strict';

    let classNames = [];
    let classNamePrefixes = [
        'js-set-container-offset',
        'js-set-wrapper-offset',
        'js-set-wrapper-2x-offset',
        'js-set-wrapper-3x-offset',
    ];

    function generateClassNames() {
        const variants = ['left', 'right', 'both'];

        classNamePrefixes.forEach(className => variants.forEach(variant => {
            classNames.push(`.${className}-${variant}`);
        }));
    }
    generateClassNames();

    function getDirection(className) {
        let arr = className.split('-');
        let {[arr.length - 1] : last} = arr;

        return last;
    }

    function isLeft(className) {
        return getDirection(className) === 'left';
    }

    function isRight(className) {
        return getDirection(className) === 'right';
    }

    function isBoth(className) {
        return getDirection(className) === 'both';
    }

    function getTargetClassName($target) {
        let classes = $target.attr('class');
        let {0: targetClass} = classes.split(' ');

        return targetClass;
    }

    function getType($target) {
        return getTargetClassName($target).replace('-offset', '')
                                            .replace('-left', '')
                                            .replace('-right', '')
                                            .replace('-both', '');
    }

    function setContainerOffset() {
        let $targets = $(classNames.join(', '));

        if ($targets.length === 0) {
            return;
        }

        $targets.each(function () {
            let $target = $(this),
                breakPointUp = $target.attr('data-breakpoint-up'),
                breakPointDown = $target.attr('data-breakpoint-down');

            if (typeof breakPointUp !== 'undefined' && typeof breakPointDown === 'undefined') {
                if (mediaBreakpointUp(breakPointUp)) {
                    setSpacing($target);
                } else {
                    clearSpacing($target);
                }

                return;
            }

            if (typeof breakPointDown !== 'undefined' && typeof breakPointUp === 'undefined') {
                if (mediaBreakpointDown(breakPointDown)) {
                    setSpacing($target);
                } else {
                    clearSpacing($target);
                }

                return;
            }

            if (typeof breakPointDown !== 'undefined' && typeof breakPointUp !== 'undefined') {
                if (mediaBreakpointUp(breakPointUp) && mediaBreakpointDown(breakPointDown)) {
                    setSpacing($target);
                } else {
                    clearSpacing($target);
                }

                return;
            }

            setSpacing($target);
        });
    }

    function setSpacing($target) {
        if (getType($target) === 'js-set-wrapper') {
            setOffset($target, wrapperOffset());
        }

        if (getType($target) === 'js-set-wrapper-2x') {
            setOffset($target, wrapperOffset() * 2);
        }

        if (getType($target) === 'js-set-wrapper-3x') {
            setOffset($target, wrapperOffset() * 3);
        }

        if (getType($target) === 'js-set-container') {
            setOffset($target, containerOffset());
        }
    }

    function setOffset($target, value) {
        let direction = getDirection(getTargetClassName($target));
        let isPull = typeof $target.attr('data-pull') !== 'undefined' ? $target.attr('data-pull') === 'true' : false;

        console.log(direction, isPull);

        if (direction === 'left' || direction === 'both') {
            if (isPull) {
                $target.css('margin-left', value * -1);
            } else {
                $target.css('padding-left', value);
            }
        }

        if (direction === 'right' || direction === 'both') {
            if (isPull) {
                $target.css('margin-right', value * -1);
            } else {
                $target.css('padding-right', value);
            }
        }
    }

    function clearSpacing($target) {
        $target.removeAttr('style');
    }

    setContainerOffset();
    $(window).resize(setContainerOffset);
});