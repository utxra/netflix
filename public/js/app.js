/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 100) {
      $(".netflix-navbar").css("background", "#141414");
    }

    else {
      $(".netflix-navbar").css("background", "transparent");
    }
  });

})


document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.navbar a').forEach(function (element) {
    element.addEventListener('click', function () {
      location.reload();
    });
  });
});

window.addEventListener('load', function () {
  if (window.location.pathname === '/') {
    document.body.style.backgroundImage = 'none';
  }
});

