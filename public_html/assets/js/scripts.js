import '@babel/polyfill';

import 'jquery';
import 'bootstrap';

import './include/auto-scroll-element-with-hash';
import './include/scroll-to';
import './include/container-offset';
import './include/set-container-offset';
import './include/calculate-viewport-height';
import './include/form-validation-and-handle';
import './include/full-height';
import './include/magnific-popup';
import './include/slick';
import './include/shrink-header';
import './include/megamenu';
import './include/lightgallery';
import './include/hamburger-menu';
import './include/tab-menu';
import './include/test';
import './include/cre-animate';
import './include/jquery.mask';
import './include/showmoreless';




$(function () {
  $('.scroll').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 140
    }, 500, 'linear');
  });
});

AOS.init({
  duration: 1200,
})

$("#information_text").change(function () {
  if (this.checked) {
    $('#submit_contact_form_button').prop('disabled', false);
    $('#submit_contact_form_button').removeClass('button-main--disabled');
    $('#submit_contact_form_button').addClass('button-main--fill');
  }
  if (!this.checked) {
    $('#submit_contact_form_button').prop('disabled', true);
    $('#submit_contact_form_button').removeClass('button-main--fill');
    $('#submit_contact_form_button').addClass('button-main--disabled');
  }
});


// InpUt MASK CAll
var options = {
  onComplete: function (cep) {
    alert('CEP Completed!:' + cep);
  },
  onKeyPress: function (cep, event, currentField, options) {
    console.log('A key was pressed!:', cep, ' event: ', event,
      'currentField: ', currentField, ' options: ', options);
  },
  onChange: function (cep) {
    console.log('cep changed! ', cep);
  },
  onInvalid: function (val, e, f, invalid, options) {
    var error = invalid[0];
    console.log("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
  }
};

$('.cep_with_callback').mask('00000-000', options);



$(document).ready(function () {
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {
    reverse: true
  });
  $('.cnpj').mask('00.000.000/0000-00', {
    reverse: true
  });
  $('.money').mask('000.000.000.000.000,00', {
    reverse: true
  });
  $('.money2').mask("#.##0,00", {
    reverse: true
  });
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/,
        optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {
    reverse: true
  });
  $('.clear-if-not-match').mask("00/00/0000", {
    clearIfNotMatch: true
  });
  $('.placeholder').mask("00/00/0000", {
    placeholder: "__/__/____"
  });
  $('.fallback').mask("00r00r0000", {
    translation: {
      'r': {
        pattern: /[\/]/,
        fallback: '/'
      },
      placeholder: "__/__/____"
    }
  });
  $('.selectonfocus').mask("00/00/0000", {
    selectOnFocus: true
  });
});

$("#popupDeleteUser").hide();

$("#userDeleteButtonD").click(function () {
  $("#popupDeleteUser").show();
});
$("#userDeleteButtonM").click(function () {
  $("#popupDeleteUser").show();
});
$("#userDeleteButtonCancel").click(function () {
  $("#popupDeleteUser").hide();
});

$("#userDeleteButtonAccept").click(function () {

  var data = {
    "_token": $('#token').val()
  };

  $.ajax({
    url: "ajax/deleteUser/" + $('#userID').val(),
    type: "post",
    data: data,
    success: function (response) {
      location.reload();

    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    }
  });

});


var isMobile = {
  Android: function () {
    return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function () {
    return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function () {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  Opera: function () {
    return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function () {
    return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
  },
  any: function () {
    return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
  }
};

var is_root = location.pathname == "/";
var url = window.location.search;


if (isMobile.any()) {
  if (url.match("scroll").length > 0) {
    $([document.documentElement, document.body]).animate({
      scrollTop: $("#elementtoScrollToID").offset().top - 30
      // scrollTop: $("#elementtoScrollToID").scrollTop() + 430  

    }, 2000);
  }

}