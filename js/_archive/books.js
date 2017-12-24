(function($) {
  $('document').ready(function(){

    $('body').removeClass('book-fullscreen');
    $('body').addClass('book-siteview');

    /* ---------------------------------------------------------------------- */
    // Slider functionality
    /* ---------------------------------------------------------------------- */

    function sliderFunctionality(){

      function signBoxResize(){
        var pageImgWidth = $('.swiper-slide .page-img').width();
        window.sliderWidth = pageImgWidth;
        var signLinkWidth = Math.ceil(pageImgWidth / 5);
        $('.sign-link').width(signLinkWidth);
        var signLinkPosition = Math.ceil(signLinkWidth / 10);
        $('.sign-link').css({ top: signLinkPosition, right: signLinkPosition});
      }

      var mySwiper = new Swiper ('.swiper-container', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        onInit: function(){
          setTimeout(function(){
            signBoxResize();
          }, 1000);
        },
        onAfterResize: function(){
          setTimeout(function(){
            signBoxResize();
          }, 1000);
        }
      });
      setTimeout(function(){
        mySwiper.slideTo(1);
      }, 500);

    }

    /* ---------------------------------------------------------------------- */
    // Sign pop-up functionality
    /* ---------------------------------------------------------------------- */

    function popUpFunctionality(){

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

    }

    /* ---------------------------------------------------------------------- */
    // Preloader
    /* ---------------------------------------------------------------------- */

    var preload;
    var progressText;
    var templateDirectoryURI = $('.template-directory-uri-value').attr('data-template-directory-uri');
    var bookName = $('.book-page').attr('data-book');
    var manifest = window.bookPreload.setupManifest(templateDirectoryURI, bookName);

    function startPreload() {
      preload = new createjs.LoadQueue(true);
      preload.on("fileload", handleFileLoad);
      preload.on("progress", handleFileProgress);
      preload.on("complete", loadComplete);
      preload.on("error", loadError);
      preload.loadManifest(manifest);
    }

    function handleFileLoad(event) {
      var html;
      var idArray = event.item.id.split('-');
      switch(idArray[1]){
        case 'page':
          if(idArray[0] == 'intro'){
            html = '<img src="'+templateDirectoryURI+'/imgs/books/intro.jpg" class="page-img img-responsive" />';
          } else {
            html = '<img src="'+templateDirectoryURI+'/imgs/books/'+bookName+'/'+idArray[0]+'.jpg" class="page-img img-responsive" />';
          }
          break;
        case 'sign':
          html = '<div id="'+idArray[0]+'-sign" class="mfp-hide white-popup-block"><img src="'+templateDirectoryURI+'/imgs/signs/'+idArray[0]+'.jpg" class="img-responsive" /></div>';
          break;

        case 'signbox':
          html = '<a href="#'+idArray[0]+'-sign" class="sign-link"><img src="'+templateDirectoryURI+'/imgs/books/sign-boxes/'+idArray[0]+'.jpg" class="img-responsive" /></a>';
          break;
      }
      $('.swiper-slide'+'.'+idArray[0]).append(html);
    }

    function loadError(evt) {
      // console.log("Error!", evt.text);
    }

    function handleFileProgress(event) {
      progressText = (preload.progress*100|0) + '%';
      // console.log(progressText);
      $('.book-section-loader span').html(progressText);
    }

    function loadComplete(event) {
      // console.log('load conplete');
      sliderFunctionality();
      popUpFunctionality();
      $('.book-section-loader').hide();
      $('.book-section .wrapper').removeClass('height-zero');
      $('.book-section .wrapper').css({
        'opacity': 1
      });
    }
    startPreload();

  });
})(jQuery);