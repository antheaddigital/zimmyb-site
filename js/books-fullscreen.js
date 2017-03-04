(function($) {
  $('document').ready(function(){

    $('body').removeClass('book-siteview');
    $('body').addClass('book-fullscreen');

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

    // init slick carousel
    $('.slider').slick({
      infinite: true,
      dots: false,
      lazyLoad: 'ondemand',
      cssEase: 'linear'
    });

    /* ---------------------------------------------------------------------- */
    // Sign pop-up functionality
    /* ---------------------------------------------------------------------- */

    // init magnific popup
    $('.sign-link').magnificPopup({type:'image'});

    $('.full-page-switch').on('click', function(e){
      e.preventDefault();
      $('body, html').toggleClass('full-page-view');
      if ($(this).text() == 'view in full screen') {
        $(this).text('back to site');
      } else {
        $(this).text('view in full screen');
      }
    });

    (function($){
      $(document).ready(function(){
        var windowWidth = $(window).width();
        var windowHeight = $(window).height();
        if(windowHeight > windowWidth){
          console.log('please rotate');
        }
        $(window).on('resize', function(){
           if($(this).width() != windowWidth){
            windowWidth = $(this).width();
            windowHeight = $(this).height();
            if(windowHeight > windowWidth){
              console.log('please rotate');
            }
           }
        });
      });
    })(jQuery);


  });
})(jQuery);
