(function($) {
  $('document').ready(function(){

    $('body').removeClass('book-siteview');
    $('body').addClass('book-fullscreen');

    /* ---------------------------------------------------------------------- */
    // Navigation functionality
    /* ---------------------------------------------------------------------- */
    $('.book-fullscreen-nav .site-nav, .book-fullscreen-nav .share').on('click', function(e){
      e.preventDefault();
      var dataMenuOption = $(this).attr('data-menu-option');
      console.log(dataMenuOption);
      $('.'+dataMenuOption).show();
      $('.'+dataMenuOption+' .close').on('click', function(e){
        e.preventDefault();
        $('.'+dataMenuOption).hide();
      });
    });

    /* ---------------------------------------------------------------------- */
    // Slider functionality
    /* ---------------------------------------------------------------------- */

    function signBoxResize(){
      var pageImgWidth = $('.swiper-slide').width();
      window.sliderWidth = pageImgWidth;
      var signLinkWidth = Math.ceil(pageImgWidth / 5);
      $('.sign-link').width(signLinkWidth);
      var signLinkPosition = Math.ceil(signLinkWidth / 10);
      $('.sign-link').css({ top: signLinkPosition, right: signLinkPosition});
    }

    function swiperSizeAdjustment(){
      var browserHeight = $(window).height();
      $('.wrapper').height(browserHeight);
      if(((browserHeight * 1.5) - ((browserHeight * 1.5) * .1)) > $(window).width()){
        var magicNum = .3;
      } else {
        var magicNum = .1;
      }

      $('.swiper-container').width((browserHeight * 1.5) - ((browserHeight * 1.5) * magicNum));
      $('.swiper-slide').width((browserHeight * 1.5) - ((browserHeight * 1.5) * magicNum));

      var sliderHeight = $('.swiper-slide .page-img').height();
      $('.swiper-container').height(sliderHeight);

      var sliderMarginTop = (browserHeight - sliderHeight) / 2;
      $('.book-section').css({'padding-top': sliderMarginTop});

      setTimeout(function(){
        signBoxResize();
      }, 1000);

    }
    swiperSizeAdjustment();

    function swiperInit(){
      var mySwiper = null;
      mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
      });
      return mySwiper;
    }
    var mySwiper = swiperInit();

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
          swiperSizeAdjustment();
          mySwiper.update();
        }
      }
    });

  });
})(jQuery);
