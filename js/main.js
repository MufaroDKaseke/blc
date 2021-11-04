$(document).ready(function($) {
  (function($) {
    'use strict';

    // Preloader
    $(window).on('load', function() {
      $('.preloader').fadeOut('slow', function() {
        $(this).remove();
      });
    });

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