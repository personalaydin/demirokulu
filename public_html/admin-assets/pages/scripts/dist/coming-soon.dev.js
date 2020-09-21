"use strict";

var ComingSoon = function () {
  return {
    //main function to initiate the module
    init: function init() {
      var austDay = new Date();
      austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
      $('#defaultCountdown').countdown({
        until: austDay
      });
      $('#year').text(austDay.getFullYear());
      $.backstretch(["../assets/pages/media/bg/1.png", "../assets/pages/media/bg/2.png", "../assets/pages/media/bg/3.png", "../assets/pages/media/bg/4.png"], {
        fade: 1000,
        duration: 10000
      });
    }
  };
}();

jQuery(document).ready(function () {
  ComingSoon.init();
});