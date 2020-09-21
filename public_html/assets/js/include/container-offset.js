let $container = $('.container').first();
let $wrapper = $('.wrapper-both').first();

export function containerOffset() {
    let bodyW = $('body').width();

    if ($container.length === 0) {
        return;
    }

    return (bodyW - $container.width()) / 2;
}

export function wrapperOffset() {
    let bodyW = $('body').width();

    if ($wrapper.length === 0) {
        return;
    }

    return (bodyW - $wrapper.width()) / 2;
}