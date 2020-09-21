// LightGallery
import '../../../node_modules/lightgallery/dist/js/lightgallery-all.min.js';

$(function() {
    'use strict';

    $('.js-light-gallery').lightGallery({
        selector: '.js-gallery-item',
    });
});