var templateDirectoryURI = $('.template-directory-uri-value').attr('data-template-directory-uri');

/***********************************************************************************
 * Sitewide functionality
 ***********************************************************************************/
(function($) {
 $('document').ready(function(){
   $(window).scroll(function() {
       if ($(this).scrollTop()) {
           $('.back-to-top').fadeIn();
       } else {
           $('.back-to-top').fadeOut();
       }
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
  });
})(jQuery);

 // mmenu
 // http://mmenu.frebsite.nl/
 // (function($) {
 //   $('document').ready(function(){
 //     // if($(window).width() < 880){
 //       $('#menu').mmenu({
 //         onClick: {
 //           close: true
 //         },
 //         extensions: ["fullscreen"],
 //         offCanvas: {
 //           position: "top"
 //         },
 //         navbars: [
 //           {
 //             position: "top",
 //             //height: 3,
 //             content: []
 //           },
 //           {
 //             position: "bottom",
 //             content: [
 //               '<a class="" href="#/"></a>',
 //               '<a class="" href="#/"></a>'
 //             ]
 //           }
 //         ]
 //       }, {
 //         clone: true
 //       });
 //       var api = $('#mm-menu').data('mmenu');
 //       $('.close-menu').on('click', function(e){
 //         e.preventDefault();
 //         api.close();
 //       });
 //       $('.nav-icon').click(function(){
 //     		$(this).toggleClass('open');
 //     	});
 //       $('.nav-get-a-free-quote-wrapper').appendTo('body');
 //       $('.mobile-nav-getafreequote').on('click', function(e){
 //         e.preventDefault();
 //         $('.nav-get-a-free-quote-wrapper').show();
 //         $('.nav-get-a-free-quote-wrapper .gform_wrapper').show();
 //       });
 //       $('.nav-get-a-free-quote-wrapper .close').on('click', function(e){
 //         e.preventDefault();
 //         $('.nav-get-a-free-quote-wrapper').hide();
 //         $('.nav-get-a-free-quote-wrapper .gform_wrapper').hide();
 //       });
 //     // } else {
 //     //   $('#menu').show();
 //     // }
 //   });
 // })(jQuery);

 // Sitewide sliders
 // http://kenwheeler.github.io/slick/
 // (function($) {
 //   $(document).ready(function() {
 //
 //     $('.home-bank-comparison-slider').slick({
 //       dots: true,
 //       infinite: true,
 //       arrows: false,
 //       slidesToScroll: 1,
 //       autoplay: true,
 //       autoplaySpeed: 5000
 //     });
 //
 //     setTimeout(function(){
 //       $('.home-industry-testimonials-slider').slick({
 //         dots: true,
 //         infinite: true,
 //         arrows: false
 //       });
 //       $('.industry-testimonials-more-stories').insertAfter('.home-industry-testimonials-slider .slick-dots');
 //     }, 2000);
 //
 //     $('.in-the-community-slider').slick({
 //       dots: true,
 //       infinite: true,
 //       arrows: true,
 //       slidesToShow: 1,
 //       adaptiveHeight: true
 //     });
 //
 //   });
 // })(jQuery);


 // CTA popup
 // http://dimsemenov.com/plugins/magnific-popup/
 // (function($){
 //   $(document).ready(function() {
 //     $('.cta').magnificPopup({
 //       type: 'inline',
 //       preloader: false,
 //       closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></button>',
 //       callbacks: {
 //         open: function() {
 //           $('.gform_wrapper').show();
 //           $('.get-your-free-quote-popup .guidlines-button').unbind().bind('click', function(){
 //             $('.guidlines-btn-wrapper').toggleClass('active');
 //             $('.guidlines-dropdown-wrapper').toggleClass('active');
 //             setTimeout(function(){
 //               $('.get-your-free-quote-popup').unbind().bind('click', function(){
 //                 $('.guidlines-btn-wrapper').removeClass('active');
 //                 $('.guidlines-dropdown-wrapper').removeClass('active');
 //                 $('.get-your-free-quote-popup').unbind('click');
 //               });
 //             }, 1000);
 //           });
 //
 //         }
 //       }
 //     });
 //     $(document).on('click', '.mfp-close', function (e) {
 //       e.preventDefault();
 //       $.magnificPopup.close();
 //     });
 //   });
 // })(jQuery);
