"use strict";

var templateDirectoryURI = $('.template-directory-uri-value').attr('data-template-directory-uri');

/***********************************************************************************
 * Sitewide functionality
 ***********************************************************************************/
 (function($) {
  $('document').ready(function(){
    $('.header-hamburger-toggle').on('click', function(e){
      e.preventDefault();
      $('.header-menu-wrapper').slideToggle('slow');
    });
  });
 })(jQuery);

(function($) {
  $('document').ready(function(){
    $(window).scroll(function() {
      if ($(this).scrollTop()) {
        $('.back-to-top').fadeIn();
      } else {
        $('.back-to-top').fadeOut();
      }
    });
    $('.back-to-top a').on('click', function(e){
      e.preventDefault();
      $('body').velocity('scroll', {
        duration: 2000,
        easing: 'easeInBack'
      });
    });
  });
})(jQuery);

/***********************************************************************************
 * Page specific functionality
 ***********************************************************************************/
(function($) {
  $('document').ready(function(){
    if ($('#home-particles').length) {
      var particlesJSON = templateDirectoryURI + '/js/particles-home-01.json';
      particlesJS.load('home-particles', particlesJSON);
    }
    if ($('#books-particles').length) {
      var particlesJSON = templateDirectoryURI + '/js/particles-books-01.json';
      particlesJS.load('books-particles', particlesJSON);
    }
    if ($('#games-particles').length) {
      var particlesJSON = templateDirectoryURI + '/js/particles-games-01.json';
      particlesJS.load('games-particles', particlesJSON);
    }
    if ($('#printables-particles').length) {
      var particlesJSON = templateDirectoryURI + '/js/particles-printables-01.json';
      particlesJS.load('printables-particles', particlesJSON);
    }
  });
})(jQuery);
