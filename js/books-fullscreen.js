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

    // apply functionality after slick carousel is initilized
    $('.slider').on('init', function(event, slick){

      // watch slide - on credits show ad
      // $('.slider').on('afterChange', function(event, slick, currentSlide){
      //   if(currentSlide == window.appSettings.creditsSlide){
      //     if(window.admob){
      //       //console.log('show ad');
      //       showAd();
      //       _paq.push(['trackGoal', window.appSettings.piwik[window.appEnvironment].creditsPageGoalID]);
      //     }
      //   }
      // });

      setTimeout(function(){
        // Apply browser height to wrapper and slider blocks
        var browserHeight = $(window).height();
        $('.wrapper').height(browserHeight);
        $('.slider .page-img').width((browserHeight * 1.5) - ((browserHeight * 1.5) * .1));
        var sliderHeight = $('.slider .page-img').height();

        var sliderMarginTop = (browserHeight - sliderHeight) / 2;
        $('.book-section').css({'padding-top': sliderMarginTop});

        // Apply new image width to slider width
        var pageImgWidth = $('.slider .page-img').width();
        window.sliderWidth = pageImgWidth;
        $('.slider').width(pageImgWidth);

        // Apply width of sign link and position
        var signLinkWidth = Math.ceil(pageImgWidth / 5);
        $('.sign-link').width(signLinkWidth);
        var signLinkPosition = Math.ceil(signLinkWidth / 10);
        $('.sign-link').css({ top: signLinkPosition, right: signLinkPosition});

        // Append full-page-view toggle
        // var fullPageViewbtn = '<div class="full-page-switch-wrapper"><a href="#" class="full-page-switch"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>';
        // $('.slick-slider').append(fullPageViewbtn);

      }, 500);

    });

    function sliderInitialize(){
      $('.slider').slick({
        dots: false,
        cssEase: 'linear'
      });
    }
    sliderInitialize();

    //$(window).resize(function(){location.reload();});

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

    // $('.full-page-switch').on('click', function(e){
    //   e.preventDefault();
    //   $('body, html').toggleClass('full-page-view');
    //   if ($(this).text() == 'view in full screen') {
    //     $(this).text('back to site');
    //   } else {
    //     $(this).text('view in full screen');
    //   }
    // });
    //
    // (function($){
    //   $(document).ready(function(){
    //     var windowWidth = $(window).width();
    //     var windowHeight = $(window).height();
    //     if(windowHeight > windowWidth){
    //       console.log('please rotate');
    //     }
    //     $(window).on('resize', function(){
    //        if($(this).width() != windowWidth){
    //         windowWidth = $(this).width();
    //         windowHeight = $(this).height();
    //         if(windowHeight > windowWidth){
    //           console.log('please rotate');
    //         }
    //        }
    //     });
    //   });
    // })(jQuery);

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    if(windowHeight > windowWidth){
      console.log('please rotate');
    }
    $(window).on('resize', function(){
      console.log('window resize');
      $('.slider').slick('unslick');
      sliderInitialize();
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
