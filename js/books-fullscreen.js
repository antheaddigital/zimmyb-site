(function($) {
  $('document').ready(function(){

    $('body').removeClass('book-siteview');
    $('body').addClass('book-fullscreen');

    /* ---------------------------------------------------------------------- */
    // Navigation functionality
    /* ---------------------------------------------------------------------- */
    $('.book-fullscreen-nav .site-nav').magnificPopup({
      type: 'inline',
  		preloader: false
    });

    $('.book-fullscreen-nav .share').magnificPopup({
      type: 'inline',
  		preloader: false
    });

    /* ---------------------------------------------------------------------- */
    // Slider functionality
    /* ---------------------------------------------------------------------- */

    var $slider = $('.slider');
    $slider.bxSlider({
      pager: false,
      nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      onSliderLoad: function(){
        // Apply browser height to wrapper and slider blocks
        $('.bx-wrapper').css({'opacity': 0});
        setTimeout(function(){
          var browserHeight = $(window).height();
          $('.wrapper').height(browserHeight);
          $('.bx-wrapper').width((browserHeight * 1.5) - ((browserHeight * 1.5) * .1));
          $('.slider .page-img').width((browserHeight * 1.5) - ((browserHeight * 1.5) * .1));
          var sliderHeight = $('.slider .page-img').height();
          $('.bx-viewport').height(sliderHeight);

          var sliderMarginTop = (browserHeight - sliderHeight) / 2;
          $('.book-section').css({'padding-top': sliderMarginTop});

          // // Apply new image width to slider width
          var pageImgWidth = $('.slider .page-img').width();
          window.sliderWidth = pageImgWidth;
          $('.slider-page').width(pageImgWidth);

          // // Apply width of sign link and position
          var signLinkWidth = Math.ceil(pageImgWidth / 5);
          $('.sign-link').width(signLinkWidth);
          var signLinkPosition = Math.ceil(signLinkWidth / 10);
          $('.sign-link').css({ top: signLinkPosition, right: signLinkPosition});

          $slider.goToSlide(1);
          $slider.goToSlide(0);
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
      $('.book-full-page-please-rotate').show();
      $('.book-section').hide();
    } else {
      $('.book-full-page-please-rotate').hide();
      $('.book-section').show();
    }
    $(window).on('resize', function(){
      if($(this).width() != windowWidth){
        windowWidth = $(this).width();
        windowHeight = $(this).height();
        if(windowHeight > windowWidth){
          $('.book-full-page-please-rotate').show();
          $('.book-section').hide();
        } else {
          $('.book-full-page-please-rotate').hide();
          $('.book-section').show();
          var currentSlide = $slider.getCurrentSlide();
          $slider.destroySlider();
          $slider.reloadSlider();
          $slider.goToSlide(currentSlide);
        }
      }
    });

  });
})(jQuery);
