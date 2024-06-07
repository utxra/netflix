import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

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

$(document).ready(function () {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll > 100) {
      $(".netflix-navbar").css("background", "#0C0C0C");
    }

    else {
      $(".netflix-navbar").css("background", "transparent");
    }
  });

})
