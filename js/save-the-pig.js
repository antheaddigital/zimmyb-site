
(function($){
  $(document).ready(function(){

    window.playerStats = {

      playerLevel: 1,
      pointsPerHit: 500,
      playerScore: 0,
      scoreStreak: 0,
      durationIncrementor: .02,
      durationIncrementorThrottle: .09,
      durationMin: 1000, // min is the fastest speed
      durationMax: 5000,

      getPlayerScore: function(){
        return window.playerStats.pointsPerHit + (window.playerStats.scoreStreak * 100);
      }

    };

    window.gameEngine = {

      defaults: {
        $letterBoxDiv: $('.letter-box div'),
        $pigBox: $('.pig-box'),
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
        this.nextLetterBegin();
      },

      nextLetterBegin: function(){
        var letter = this.getLetter();
        var pig = this.getPig();
        var templateDirectoryURI = $('.template-directory-uri-value').attr('data-template-directory-uri');
        this.defaults.$letterBoxDiv.addClass(letter);
        this.resetPigBoxPosition(this.defaults.$pigBox);
        this.bindKeyboard(letter);
        this.defaults.$pigBox.velocity('fadeIn', 'slow', function(){
          window.gameEngine.pigBoxMove(window.gameEngine.defaults.$pigBox);
        });
      },

      bindKeyboard: function(letter){
        $('body').unbind().bind('keydown', function(e) {
          var letterPressed = String.fromCharCode(e.which);
          $('.keys-row span[data-key="'+letterPressed.toLowerCase()+'"]').addClass('active');
          // console.log('letter = '+letter);
          // console.log('letterPressed = '+letterPressed);
          if(letterPressed.toLowerCase() == letter.toLowerCase()){
            // player stats
            window.playerStats.durationIncrementor = window.playerStats.durationIncrementor + (window.playerStats.durationIncrementor * window.playerStats.durationIncrementorThrottle);
            console.log(window.playerStats.durationIncrementor);

            if(window.playerStats.durationMin < window.playerStats.durationMax) {
              window.playerStats.durationMax = window.playerStats.durationMax - (window.playerStats.durationMax * window.playerStats.durationIncrementor);
            }
            console.log(window.playerStats.durationMax);

            ++window.playerStats.scoreStreak;
            console.log(window.playerStats.scoreStreak);

            window.playerStats.playerScore = window.playerStats.playerScore + window.playerStats.getPlayerScore();
            console.log(window.playerStats.playerScore);
            $('.player-score').html(window.playerStats.playerScore);

            // next block
            window.gameEngine.defaults.$pigBox.velocity('stop');
            window.gameEngine.defaults.$pigBox.velocity('fadeOut', 'slow', function(){
              window.gameEngine.defaults.$letterBoxDiv.removeClass();
              window.gameEngine.nextLetterBegin();
            });
          } else {
            console.log('no');
          }
        }).bind('keyup', function(e) {
          $('.keys-row span').removeClass('active');
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
            console.log('complete');
            // player stats
            window.playerStats.durationIncrementor = .02;
            window.playerStats.durationIncrementorThrottle = .09;
            window.playerStats.durationMax = window.playerStats.durationMax + (window.playerStats.durationMax / 2);
            window.playerStats.scoreStreak = 0;
            // next block
            window.gameEngine.defaults.$pigBox.velocity('stop');
            window.gameEngine.defaults.$pigBox.velocity('fadeOut', 'slow', function(){
              window.gameEngine.defaults.$letterBoxDiv.removeClass();
              window.gameEngine.nextLetterBegin();
            });
          }
        });
      }

    };

    $('.start-game').on('click', function(e){
      window.gameEngine.init();
    });

  });
})(jQuery);
