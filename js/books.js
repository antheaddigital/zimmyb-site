(function($) {
  $('document').ready(function(){

    $('body').removeClass('book-fullscreen');
    $('body').addClass('book-siteview');

    /* ---------------------------------------------------------------------- */
    // Slider functionality
    /* ---------------------------------------------------------------------- */

    var $slider = $('.slider');
    $slider.bxSlider({
      pager: false,
      nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      onSliderLoad: function(){
        $('.bx-wrapper').css({'opacity': 0});
        setTimeout(function(){
          var pageImgWidth = $('.slider .page-img').width();
          window.sliderWidth = pageImgWidth;
          // $('.slider').width(pageImgWidth);
          // $('mfp-wrap').width(pageImgWidth);
          //
          // // Apply width of sign link and position
          var signLinkWidth = Math.ceil(pageImgWidth / 5);
          $('.sign-link').width(signLinkWidth);
          var signLinkPosition = Math.ceil(signLinkWidth / 10);
          $('.sign-link').css({ top: signLinkPosition, right: signLinkPosition});
          $('.bx-wrapper').css({'opacity': 1});
        }, 500);
      }
    });

    /* ---------------------------------------------------------------------- */
    // Sign pop-up functionality
    /* ---------------------------------------------------------------------- */

    // init magnific popup
    $('.sign-link').magnificPopup({
      type:'inline',
      closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></button>',
      callbacks: {
        open: function() {
          var popWidth = window.sliderWidth * .7;
          $('.white-popup-block').width(popWidth);
        }
      }
    });
    $(document).on('click', '.mfp-close', function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    if(windowHeight > windowWidth){
      console.log('please rotate');
    }
    $(window).on('resize', function(){
      var currentSlide = $slider.getCurrentSlide();
      $slider.destroySlider();
      $slider.reloadSlider();
      $slider.goToSlide(currentSlide);
      //sliderInitialize();
      //}, 1000);
      // if($(this).width() != windowWidth){
      //   windowWidth = $(this).width();
      //   windowHeight = $(this).height();
      //   if(windowHeight > windowWidth){
      //     console.log('please rotate');
      //   } else {
      //     $('.slider').slick('unslick');
      //     sliderInitialize();
      //   }
      // }
    });


  });
})(jQuery);
