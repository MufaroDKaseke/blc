$(document).ready(function($) {
  (function($) {
    'use strict';

    // Change to header fixed
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
          $('.navbar').addClass('header-bg');
      } else {
          $('.navbar').removeClass('header-bg');
      }
    });
  })(jQuery);
});         