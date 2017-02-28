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

(function($){
  $(document).ready(function(){

    window.playerStats = {
      pointsPerHit: 500,
      playerScore: 0,
      scoreStreak: 0,
      highestStreak: 0,
      strikes: 0,
      strikesInfinite: true,
      durationIncrementor: .02,
      durationIncrementorThrottle: .09,
      durationMin: 1000, // min is the fastest speed
      durationMax: 5000,
      getPlayerScore: function(){
        return window.playerStats.pointsPerHit + (window.playerStats.scoreStreak * 100);
      }
    };

    window.gameDefaults = {
      playerScore: 0,
      scoreStreak: 0,
      highestStreak: 0,
      strikes: 0,
      strikesInfinite: true,
      durationIncrementor: .02,
      durationIncrementorThrottle: .09,
      durationMin: 1000, // min is the fastest speed
      durationMax: 5000
    },

    window.gameEngine = {

      defaults: {
        $template_uri: $('.template-directory-uri-value').attr('data-template-directory-uri'),
        $letterBoxDiv: $('.letter-box div'),
        $pigBox: $('.pig-box'),
        pigNum: null,
        lookup: {
          // Ranges calculated from data found at
          // http://en.wikipedia.org/wiki/Letter_frequency
          a: 8167,  b: 9659,  c: 12441, d: 16694,
          e: 29396, f: 31624, g: 33639, h: 39733,
          i: 46699, j: 46852, k: 47624, l: 51649,
          m: 54055, n: 60804, o: 68311, p: 70240,
          q: 70335, r: 76322, s: 82649, t: 91705,
          u: 94463, v: 95441, w: 97801, x: 97951,
          y: 99925, z: 100000
        }
      },

      init: function(){
        this.resetScoreboard();
        this.setStrikesZone();
        this.setGifs('animated');
        this.setSpeed();
        this.nextLetterBegin();
      },

      resetScoreboard: function(){
        $('.player-score .score').html(0);
        $('.player-streak .streak').html(0);
      },

      setStrikesZone: function(){
        window.playerStats.strikes = window.gamePresets.strikes;
        if(window.playerStats.strikes >= 1 && window.playerStats.strikes <= 5){
          window.playerStats.strikesInfinite = false;
          // show water barrel strike board
          $('.water-barrel-ad .ad').addClass('hidden');
          $('.water-barrel-ad .strikes').removeClass('hidden');
          var i = window.playerStats.strikes;
          while( i > 0 ){
            var strikeEl = '<span class="strike" data-strike="'+i+'">X</span>';
            $('.water-barrel-ad .strikes').append(strikeEl);
            $('.strike-popup .pig-clean-strikes').append(strikeEl);
            i--;
          }
        } else if (window.playerStats.strikes == 0) {
          window.playerStats.strikesInfinite = true;
          // show water barrel ad
          $('.water-barrel-ad .strikes').addClass('hidden');
          $('.water-barrel-ad .ad').removeClass('hidden');
        }
      },

      setGifs: function(type){
        var waterBarrel = window.gameEngine.defaults.$template_uri + '/imgs/games/save-the-pig/barrel-'+type+'.gif';
        $('.water-barrel').css('background-image', 'url(' + waterBarrel + ')');
      },

      setStillGifs: function(){
        var waterBarrel = window.gameEngine.defaults.$template_uri + '/imgs/games/save-the-pig/barrel-still.gif';
        $('.water-barrel').css('background-image', 'url(' + waterBarrel + ')');
      },

      addStrike: function(){
        $('.water-barrel-ad .strikes span[data-strike='+window.playerStats.strikes+']').addClass('active');
        $('.strike-popup .pig-clean-strikes span[data-strike='+window.playerStats.strikes+']').addClass('active');
        window.playerStats.strikes = window.playerStats.strikes - 1;
      },

      setSpeed: function(){
        //console.log(window.gamePresets.speed);
        switch(window.gamePresets.speed){
          case '0':
            window.playerStats.durationMin = 5000;
            break;
          case '1':
            window.playerStats.durationMin = 4500;
            break;
          case '2':
            window.playerStats.durationMin = 4000;
            break;
          case '3':
            window.playerStats.durationMin = 3500;
            break;
          case '4':
            window.playerStats.durationMin = 3000;
            break;
          case '5':
            window.playerStats.durationMin = 2500;
            break;
          case '6':
            window.playerStats.durationMin = 2000;
            break;
          case '7':
            window.playerStats.durationMin = 1500;
            break;
          case '8':
            window.playerStats.durationMin = 1000;
            break;
          case '9':
            window.playerStats.durationMin = 500;
            break;
          case '10':
            window.playerStats.durationMin = 0;
            break;
        }
      },

      nextLetterBegin: function(){
        var letter = this.getLetter();
        var pig = this.getPig();
        switch(window.gamePresets.mode) {
          case 'sign':
            this.defaults.$letterBoxDiv.addClass(letter);
            break;
          case 'character':
            //console.log(letter);
            this.defaults.$letterBoxDiv.html(letter);
            break;
        }
        this.resetPigBoxPosition(this.defaults.$pigBox);
        this.bindKeyboard(letter);
        this.defaults.$pigBox.velocity('fadeIn', 'slow', function(){
          window.gameEngine.pigBoxMove(window.gameEngine.defaults.$pigBox);
        });
      },

      bindKeyboard: function(letter){
        $('body').unbind().bind('keydown', function(e){
          var letterPressed = String.fromCharCode(e.which);
          $('.keys-row span[data-key="'+letterPressed.toLowerCase()+'"]').addClass('active');
        }).bind('keyup', function(e) {
          var letterPressed = String.fromCharCode(e.which);
          $('.keys-row span').removeClass('active');
          // console.log('letter = '+letter);
          // console.log('letterPressed = '+letterPressed);
          if(letterPressed.toLowerCase() == letter.toLowerCase()){
            // player stats
            window.playerStats.durationIncrementor = window.playerStats.durationIncrementor + (window.playerStats.durationIncrementor * window.playerStats.durationIncrementorThrottle);
            //console.log(window.playerStats.durationIncrementor);

            if(window.playerStats.durationMin < window.playerStats.durationMax) {
              window.playerStats.durationMax = window.playerStats.durationMax - (window.playerStats.durationMax * window.playerStats.durationIncrementor);
            }
            //console.log(window.playerStats.durationMax);

            ++window.playerStats.scoreStreak;
            //console.log(window.playerStats.scoreStreak);

            window.playerStats.playerScore = window.playerStats.playerScore + window.playerStats.getPlayerScore();
            //console.log(window.playerStats.playerScore);
            $('.player-score .score').html(window.playerStats.playerScore);
            $('.player-streak .streak').html(window.playerStats.scoreStreak);

            // next block
            window.gameEngine.defaults.$pigBox.velocity('stop');
            window.gameEngine.defaults.$pigBox.velocity('fadeOut', 'slow', function(){
              switch(window.gamePresets.mode) {
                case 'sign':
                  window.gameEngine.defaults.$letterBoxDiv.removeClass(letter);
                  break;
                case 'character':
                  window.gameEngine.defaults.$letterBoxDiv.html('');
                  break;
              }
              window.gameEngine.defaults.$letterBoxDiv.removeClass();
              window.gameEngine.nextLetterBegin();
            });
          } else {
            //console.log('no');
          }
        }).bind('keyup', function(e) {

        });
      },

      getLetter: function(){
        // http://stackoverflow.com/questions/1527803/generating-random-whole-numbers-in-javascript-in-a-specific-range
        var random = Math.random() * 100000,
            letter;
        for (letter in this.defaults.lookup) {
          if (random < this.defaults.lookup[letter]) {
            return letter;
          }
        }
      },

      getPig: function(){
        // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random
        var pigNum = Math.floor(Math.random() * (5 - 1)) + 1;
        window.gameEngine.defaults.pigNum = pigNum;
        var imageUrl = window.gameEngine.defaults.$template_uri + '/imgs/games/save-the-pig/pig-'+pigNum+'.gif';
        //console.log(imageUrl);
        $('.pig-box').css('background-image', 'url(' + imageUrl + ')');
      },

      resetPigBoxPosition: function($pigBox){
        $pigBox.hide().css({
          'left': 0
        });
      },

      pigBoxMove: function($pigBox){
        $pigBox.velocity({
          left: '700px'
        }, {
          duration: window.playerStats.durationMax,
          easing: 'linear',
          complete: function() {

            // player stats
            window.playerStats.durationIncrementor = .02;
            window.playerStats.durationIncrementorThrottle = .09;
            window.playerStats.durationMax = window.playerStats.durationMax + (window.playerStats.durationMax / 2);
            window.gameEngine.setThankPopupValues();
            window.playerStats.scoreStreak = 0;
            $('.player-streak .streak').html('0');
            window.gameEngine.addStrike();
            // console.log(window.playerStats.strikes);
            // console.log(window.playerStats.strikesInfinite);
            if(window.playerStats.strikes <= 0 && window.playerStats.strikesInfinite == false){
              $('.stop-game').trigger('click');
              return false;
            }
            // next block
            window.gameEngine.defaults.$pigBox.velocity('stop');
            window.gameEngine.defaults.$pigBox.hide();
            //window.gameEngine.defaults.$pigBox.velocity('fadeOut', 'slow', function(){
              switch(window.gamePresets.mode) {
                case 'sign':
                  window.gameEngine.defaults.$letterBoxDiv.removeClass();
                  break;
                case 'character':
                  window.gameEngine.defaults.$letterBoxDiv.html('');
                  break;
              }
              var pigCleanImage = window.gameEngine.defaults.$template_uri+'/imgs/games/save-the-pig/pig-clean-'+window.gameEngine.defaults.pigNum+'.gif';
              $('.pig-clean-image').css({
                'background-image': 'url(' + pigCleanImage + ')'
              });
              $('.pig-clean-image').velocity({
                scale: 5
              }, {
                duration: 2000
              });
              $('.strike-popup-open').trigger('click');
              setTimeout(function(){
                $('.pig-clean-image').velocity({
                  scale: -5
                });
                $('.strike-popup .mfp-close').trigger('click');
                window.gameEngine.nextLetterBegin();
              }, 5000);
            //});
          }
        });
      },

      gameStop: function(){
        var $pigBox = this.defaults.$pigBox;
        $pigBox.velocity("stop");
        window.gameEngine.setThankPopupValues();
        $pigBox.velocity('fadeOut', 'slow', function(){
          $('.water-barrel-ad .strikes span').remove();
          $('.strike-popup .pig-clean-strikes span').remove();
          $('.water-barrel-ad .strikes').addClass('hidden');
          $('.water-barrel-ad .ad').removeClass('hidden');
          window.gameEngine.resetGameDefaults();
          switch(window.gamePresets.mode) {
            case 'sign':
              window.gameEngine.defaults.$letterBoxDiv.removeClass();
              break;
            case 'character':
              window.gameEngine.defaults.$letterBoxDiv.html('');
              break;
          }
        });
        this.setGifs('still');
        $('.game-finished-popup-open').trigger('click');
      },

      setThankPopupValues: function(){
        if(window.playerStats.highestStreak < window.playerStats.scoreStreak){
          window.playerStats.highestStreak = window.playerStats.scoreStreak;
        }
        $('.game-finished-popup-score span').html(window.playerStats.playerScore);
        $('.game-finished-popup-streak span').html(window.playerStats.highestStreak);

        //http://www.facebook.com/sharer/sharer.php?u=http://www.reliantfunding.com/blog/the-holy-grail-of-success-lies-in-a-great-sales-team
      },

      resetGameDefaults: function(){
        window.playerStats.playerScore = window.gameDefaults.playerScore;
        window.playerStats.scoreStreak = window.gameDefaults.scoreStreak;
        window.playerStats.highestStreak = window.gameDefaults.highestStreak;
        window.playerStats.strikes = window.gameDefaults.strikes;
        window.playerStats.strikesInfinite = window.gameDefaults.strikesInfinite;
        window.playerStats.durationIncrementor = window.gameDefaults.durationIncrementor;
        window.playerStats.durationIncrementorThrottle = window.gameDefaults.durationIncrementorThrottle;
        window.playerStats.durationMin = window.gameDefaults.durationMin;
        window.playerStats.durationMax = window.gameDefaults.durationMax;
      }

    };

    window.gamePresets = {
      mode: 'sign',
      speed: 5,
      strikes: 0
    };

    $('.mode a').on('click', function(e){
      e.preventDefault();
      $('.mode a').removeClass();
      $(this).addClass('active');
      window.gamePresets.mode = $(this).attr('data-mode');
      switch (window.gamePresets.mode) {
        case 'sign':
          $('.letter-box').removeClass('character');
          $('.letter-box').addClass('sign');
          break;
        case 'character':
          $('.letter-box').removeClass('sign');
          $('.letter-box').addClass('character');
          break;
      }
      //console.log(window.gamePresets.mode);
    });

    $('.speed').on('change', function(){
      var $this = $(this);
      var inputVal = Math.floor($this.val());
      console.log(inputVal);
      $this.val(inputVal);
      console.log($this.val().length);
      if($this.val().length == 0){
        $this.val(0);
      }
      if (inputVal < 0 || inputVal > 10){
        if ($this.val() < 0) {
          $this.val(0);
        }
        if ($this.val() > 10) {
          $this.val(10);
        }
      }
      var speed = $(this).val();
      window.gamePresets.speed = speed;
      console.log(window.gamePresets.speed);
    });

    $('.strikes').on('change', function(){
      var $this = $(this);
      var inputVal = Math.floor($this.val());
      $this.val(inputVal);
      if($this.val().length == 0){
        $this.val(0);
      }
      if (inputVal < 0 || inputVal > 5){
        if ($this.val() < 0) {
          $this.val(0);
        }
        if ($this.val() > 5) {
          $this.val(5);
        }
      }
      var strikes = $(this).val();
      window.gamePresets.strikes = strikes;
    });

    $('.start-game').on('click', function(e){
      e.preventDefault();
      $('.controls button').removeClass('active');
      $(this).addClass('active');
      window.gameEngine.init();
    });

    $('.stop-game').on('click', function(e){
      e.preventDefault();
      if(!$(this).hasClass('active')){
        $('.controls button').removeClass('active');
        $(this).addClass('active');
        window.gameEngine.gameStop();
      }
    });

    $('.game-finished-popup-open, .strike-popup-open').magnificPopup({
      type: 'inline',
      preloader: false,
      closeMarkup: '<button title="%title%" type="button" class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></button>'
    });
    $(document).on('click', '.mfp-close', function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });

  });
})(jQuery);

(function($){
  $(document).ready(function(){

    var template_uri = $('.template-directory-uri-value').attr('data-template-directory-uri');

    var gameImgs = [
      template_uri + '/imgs/games/save-the-pig/background.jpg',
      template_uri + '/imgs/games/save-the-pig/bigboardsign.png',
      template_uri + '/imgs/games/save-the-pig/ice-table.png',
      template_uri + '/imgs/games/save-the-pig/kid-dog-announcer.png',
      template_uri + '/imgs/games/save-the-pig/signs.png',
      template_uri + '/imgs/games/save-the-pig/zimmy.gif',
      template_uri + '/imgs/games/save-the-pig/water-barrel.png',
      template_uri + '/imgs/games/save-the-pig/water-barrel-ad.png',
      template_uri + '/imgs/games/save-the-pig/keyboard-backboard.png',
      template_uri + '/imgs/games/save-the-pig/pig-1.gif',
      template_uri + '/imgs/games/save-the-pig/pig-2.gif'
    ];

  });
})(jQuery);
