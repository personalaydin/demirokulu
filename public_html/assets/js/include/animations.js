const animateTimeouts = {};

// Reset previous animations
export function animateReset($wrapper) {
    $('.animate', $wrapper).each(function () {
        var $this = $(this), animateClass;

        animateClass = 'animated will-be-animate ' + $this.attr('data-animate');

        $this.removeClass(animateClass);
    });
}

// Trigger the animates
export function animate($wrapper, timeoutNames) {
    if (typeof timeoutNames === 'undefined') {
        timeoutNames = 'time_out_'+Math.random().toString(36).substr(2, 9);
    }

    // Before clear previous animation's timeouts
    if (typeof animateTimeouts[timeoutNames] !== 'undefined') {
        $.each(animateTimeouts[timeoutNames], function(i) {
            clearTimeout(animateTimeouts[timeoutNames][i]);
        });
    }

    animateTimeouts[timeoutNames] = [];

    $('.animate', $wrapper).each(function () {
        var $this = $(this),
            animateClass,
            delay = ($this.attr('data-animate-delay') === undefined ? 0 : $this.attr('data-animate-delay'));

        animateClass = 'animated ' + $this.attr('data-animate');

        $this.addClass('will-be-animate');

        if (delay === 0) {
            $this.addClass(animateClass);
        } else {
            var timeoutID = setTimeout(function () {
                if ($this.hasClass('will-be-animate')) {
                    $this.addClass(animateClass);
                }
            }, delay);

            animateTimeouts[timeoutNames].push(timeoutID);
        }
    });
}