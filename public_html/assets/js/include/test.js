// $(document).ready(function() {  
//     $('#cookieModal').modal('show');
//     $("#closeButton").click(function(){
//       $("#cookieModal").hide();
//     });
//   });


$(document).ready(function () {


  var cooky = sessionStorage.getItem('cookieAlertOnce');
  if (!cooky) {
    setTimeout(function () {
      $("#cookieConsent").fadeIn(200);
    }, 4000);

  }


  $("#closeCookieConsent, .cookieConsentOK").click(function () {
    $("#cookieConsent").fadeOut(200);
    sessionStorage.setItem('cookieAlertOnce', 'true');
  });
});




// window.onload = function () {

//   var popup = document.getElementById("popup");

//   popup.classList.remove("hidden");

//   setTimeout(() => popup.classList.add("fade-in"));

//   document.getElementById("selectCity").onchange = function () {

//     popup.classList.remove("fade-in");

//     setTimeout(() => popup.classList.add("hidden"), 300);
//   };
//   // if (sessionStorage.getItem('dontLoad') == null) {
//   //   alert("This message will be shown only once when we use this window.")
//   //   sessionStorage.setItem('dontLoad', 'true');
//   // }
// };






$(document).ready(function () {


  $(".show-more-1").click(function () {
    if ($(".text-1").hasClass("show-more-1-height")) {
      $(this).text("Daha Az Göster");
    } else {
      $(this).text("Devamı için");
    }
    $(".dot-1").toggle();
    $(".text-1").toggleClass("show-more-1-height");
    $(this).siblings('.additional-content').toggle();

  });


  $(".show-more-2").click(function () {
    if ($(".text-2").hasClass("show-more-2-height")) {
      $(this).text("Daha Az Göster");
    } else {
      $(this).text("Devamı için");
    }
    $(".dot-2").toggle();
    $(".text-2").toggleClass("show-more-2-height");
    $(this).siblings('.additional-content').toggle();

  });


  $(".show-more-3").click(function () {
    if ($(".text-3").hasClass("show-more-3-height")) {
      $(this).text("Daha Az Göster");
    } else {
      $(this).text("Devamı için");
    }
    $(".dot-3").toggle();
    $(".text-3").toggleClass("show-more-3-height");
    $(this).siblings('.additional-content').toggle();

  });


  $(".show-more-4").click(function () {
    if ($(".text-4").hasClass("show-more-4-height")) {
      $(this).text("Daha Az Göster");
    } else {
      $(this).text("Devamı için");
    }
    $(".dot-4").toggle();
    $(".text-4").toggleClass("show-more-4-height");
    $(this).siblings('.additional-content').toggle();

  });



  var cookyAccept = sessionStorage.getItem('acceptAlertOnce');

  if (!cookyAccept) {
    $(".acceptPopupContent").removeClass('hidden');


  }


  $("#_onceOk").click(function () {
    $("#acceptPopupContent").fadeOut(200);
    sessionStorage.setItem('acceptAlertOnce', 'true');
  });
});



$('.videoplay').on('click', function () {
  $(".videoplay").hide('.videoplay')[0].src += "?autoplay=1";
});


$(function () {
  $(".btnRadio").change(function () {
    if ($(".btnRadio").is(":checked")) {
      $('#otherBox').show();
      console.log('div show');
    } else
      $('#otherBox').hide();
    console.log('div none');
  });
});

$(function () {
  $("input[name='nameMemberOne']").click(function () {
    if ($(".memberOne").is(":checked")) {
      $("#memberTwo").show();


    } else {
      $("#memberTwo").hide();
    }
  });
});



jQuery.fn.forceNumeric = function () {

  var pathname = window.location.href;
  var langStyleElements = document.getElementsByClassName("menu-item");

  for (var i = 0; i < langStyleElements.length; i++) {
    var lsElem = langStyleElements[i];
    var innerLsElem = $(lsElem).attr('href');
    console.log(pathname);
    console.log(innerLsElem);

    if (innerLsElem.startsWith('//')) {
      innerLsElem = innerLsElem.substring(2, innerLsElem.length);
    }

    if (pathname.includes(innerLsElem.toLowerCase())) {
      $(lsElem).addClass('lang_style_focused');
    } else {
      $(lsElem).removeClass('lang_style_focused');
    }
  }

  return this.each(function () {
    $(this).keydown(function (e) {
      var key = e.which || e.keyCode;

      if (key > 64 && key <= 123 || (key == 32 || key == 8))
        return true;

      return false;
    });
  });
}

$('#onlyalpha').keypress(function (e) {
  var letters = /^[a-zA-Z0-9ğüşöçİĞÜŞÖÇ]+$/gi; //i means ignorecase
  if (!(e.key).match(letters)) e.preventDefault();
});
$(document).ready(function () {




  $(".numberinput").forceNumeric();
});