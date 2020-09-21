import 'magnific-popup';

$(function() {
    'use strict';

    function magnificPopup() {
        // Inline HTML
        $('.js-popup-inline').magnificPopup({
            type: 'inline',
            midClick: true,
        });

        // Video
        $('.js-popup-video').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        // Ajax HTML
        $('a.js-popup-ajax, label.js-popup-ajax a, span.js-popup-ajax a').magnificPopup({
            type: 'ajax',
            midClick: true,
        });

        // Image
        $('a.js-popup-image, label.js-popup-image a, span.js-popup-image a').magnificPopup({
            type: 'image',
            midClick: true,
        });
    }

    magnificPopup();
});