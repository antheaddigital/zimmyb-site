<div class="page-save-the-pig" data-mode="<?php if(isset($_GET['mode'])){ echo $_GET['mode']; } else { echo 'null'; } ?>">

  <!-- <iframe style="display: none;" width="560" height="315" src="https://www.youtube.com/embed/Le4_YYSo_Vk?autoplay=1" frameborder="0" allowfullscreen></iframe> -->

  <!-- save-the-pig-game -->
  <section class="save-the-pig-game">
    <div class="wrapper">
      <div class="mode-select">
        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/games/save-the-pig/save-the-pig-sign-still.png" />
        <h2>Select a Game Mode</h2>
        <div class="mode-select-wrapper">
          <div class="mode-select-mode mode-select-mode-animate">
            <a href="<?php echo esc_url( site_url() ); ?>/games/save-the-pig/?mode=animated">animated</a>
            <p>Faster Computers<br /><span> - and/or -</span><br />Faster Wifi</p>
          </div>
          <div class="mode-select-mode mode-select-mode-still">
            <a href="<?php echo esc_url( site_url() ); ?>/games/save-the-pig/?mode=still">still</a>
            <p>Slower Computers<br /><span> - and/or -</span><br />Slower Wifi</p>
          </div>
        </div>
      </div>
      <div class="stage-preload">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/games/save-the-pig/loader.gif" />
        <div class="loading-message-wrapper">
          <div class="loading-timer">Loading... <span></span></div>
          <!-- <div class="loading-message">Load time could take around 1 minute.</div> -->
          <div class="loading-thank-you">Thank You for Playing!</div>
        </div>
      </div>
      <div class="stage">
        <div class="sound-control-wrapper">
          <a class="sound-control-toggle" href="#"><i class="fa fa-volume-up" aria-hidden="true"></i><br />edit</a>
          <div class="sound-control-panel">
            <a class="sound-control-panel-close" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
            <div class="sound-control-panel-section">
              <a class="sound-control-panel-answer-snort sound-music-effect volume-on" data-volume="on" data-sound-music="Snort" href="#"><i class="fa fa-volume-up" aria-hidden="true"></i><br />snort</a>
              <a class="sound-control-panel-answer-fart sound-music-effect volume-on" data-volume="on" data-sound-music="Fart" href="#"><i class="fa fa-volume-up" aria-hidden="true"></i><br />fart</a>
              <a class="sound-control-panel-answer-splash sound-music-effect volume-on" data-volume="on" data-sound-music="Splash" href="#"><i class="fa fa-volume-up" aria-hidden="true"></i><br />splash</a>
              <a class="sound-control-panel-answer-cheers sound-music-effect volume-on" data-volume="on" data-sound-music="Cheers" href="#"><i class="fa fa-volume-up" aria-hidden="true"></i><br />cheers</a>
              <a class="sound-control-panel-answer-cheers sound-music-effect volume-on" data-volume="on" data-sound-music="Numbers" href="#"><i class="fa fa-volume-up" aria-hidden="true"></i><br />numbers</a>
              <a class="sound-control-panel-answer-music sound-music-effect volume-on" data-volume="on" data-sound-music="Music" href="#"><i class="fa fa-volume-up" aria-hidden="true"></i><br />music</a>
            </div>
            <!-- <div class="sound-control-panel-section">
            </div> -->
          </div>
        </div>
        <div class="game-head-board">
          <div class="game-logo-sign"></div>
          <div class="game-control-board">
            <div class="player-score-board">
              <div class="player-score"><span class="score-label">score</span><span class="score">0</span></div>
              <div class="player-streak"><span class="streak-label">streak</span><span class="streak">0</span></div>
              <div class="clear"></div>
            </div>
            <div class="controls">
              <button class="start-game">start</button>
              <button class="stop-game active">stop</button>
            </div>
            <div class="mode">
              <span>Mode</span>
              <a href="#" class="active sign" data-mode="sign"></a>
              <a href="#" class="character" data-mode="character"></a>
            </div>
            <div class="inputs">
              <div class="input-wrapper">
                <label for="speed">Max Speed</label>
                <input type="number" id="speed" class="speed" name="speed" value="5" min="0" max="10" />
                <span>slowest = 0<br />fastest = 10<br />default = 5</span>
              </div>
              <div class="input-wrapper">
                <label for="strikes">Strikes</label>
                <input type="number" id="strikes" class="strikes" name="strikes" value="0" min="0" max="10" />
                <span>max = 5<br />infinite = 0<br />default = 0</span>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden-track">
          <div class="pig-box">
            <div class="letter-box sign">
              <div class=""></div>
            </div>
          </div>
        </div>
        <div class="kid-dog-announcer"></div>
        <div class="keyboard-wrapper">
          <div class="keys-row-1 keys-row">
            <span data-key="q">q</span>
            <span data-key="w">w</span>
            <span data-key="e">e</span>
            <span data-key="r">r</span>
            <span data-key="t">t</span>
            <span data-key="y">y</span>
            <span data-key="u">u</span>
            <span data-key="i">i</span>
            <span data-key="o">o</span>
            <span data-key="p">p</span>
          </div>
          <div class="keys-row-2 keys-row">
            <span data-key="a">a</span>
            <span data-key="s">s</span>
            <span data-key="d">d</span>
            <span data-key="f">f</span>
            <span data-key="g">g</span>
            <span data-key="h">h</span>
            <span data-key="j">j</span>
            <span data-key="k">k</span>
            <span data-key="l">l</span>
          </div>
          <div class="keys-row-3 keys-row">
            <span data-key="z">z</span>
            <span data-key="x">x</span>
            <span data-key="c">c</span>
            <span data-key="v">v</span>
            <span data-key="b">b</span>
            <span data-key="n">n</span>
            <span data-key="m">m</span>
          </div>
        </div>
        <div class="water-barrel-wrapper">
          <div class="water-barrel-ad">
            <div class="ad"></div>
            <div class="strikes hidden">
              <div class="strikes-header">STRIKES</div>
            </div>
          </div>
        </div>
        <div class="rat-skunk"></div>
        <a class="game-finished-popup-open hidden" href="#game-finished-popup"></a>
        <div id="game-finished-popup" class="mfp-hide white-popup-block game-finished-popup">
          <!-- <div class="game-finished-popup-header">nice score!</div> -->
          <div class="clear"></div>
          <div class="game-finished-popup-left">
            <div class="game-finished-popup-left-score-wrapper">
              <div class="game-finished-popup-left-score">Score: <span></span></div>
              <div class="game-finished-popup-left-streak">Highest Streak: <span></span></div>
            </div>
            <div class="game-finished-popup-left-social-wrapper">
              <a class="game-finished-popup-left-social-facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmybooks-facebook.png" alt="Zimmy Books on Facebook" /></a>
              <a class="game-finished-popup-left-social-twitter" href="http://twitter.com/share?text=Save-the-Pig"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmybooks-twitter.png" alt="Zimmy Books on Twitter" /></a>
              <!-- <a class="game-finished-popup-left-social-youtube" href=""><i class="fa fa-youtube-square" aria-hidden="true"></i></a> -->
            </div>
            <div class="game-finished-popup-left-play-again-wrapper">
              <button class="play-again" href="">PLAY AGAIN!</button>
            </div>
          </div>
          <div class="game-finished-popup-right">
            <div class="game-finished-popup-right-challenge-wrapper">
              <div class="challenge-header">Are You<br />Brave Enough?</div>
              <div class="challenge-settings">
                <div class="challenge-settings-wrapper">
                  <span class="challenge-settings-header">max speed</span>
                  <span class="challenge-settings-speed"></span>
                </div>
                <div class="challenge-settings-wrapper">
                  <span class="challenge-settings-header">strikes</span>
                  <span class="challenge-settings-strikes"></span>
                </div>
              </div>
              <button class="challenge-accept" href="">ACCEPT CHALLENGE!</button>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <a class="strike-popup-open hidden" href="#strike-popup"></a>
        <div id="strike-popup" class="mfp-hide white-popup-block strike-popup">
          <div class="pig-clean-wrapper">
            <div class="pig-clean-image"></div>
            <div class="pig-clean-show-answer">
              <div class="sign-letter"><div></div></div><span class="character-letter"></span>
            </div>
            <div class="pig-clean-strikes"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- page-save-the-pig - end -->

  <!-- book-game-description -->
  <?php
    $book_game_social = 'Save the Pig! https://goo.gl/6cNS8Q';
    $book_game_title = 'save-the-pig';
    $book_game_description = '<h1>Save the Pig</h1>';
    $book_game_description .= '<div class="description">';
      $book_game_description .= '<p>Sign language typing game for everybody and all ages. Learn the alphabet in sign language and practice your typing skills while trying to save the pigs from a warm summer day bath.</p>';
      $book_game_description .= '<p>The crowd will cheer you on as the pigs pick up speed toward the full barrel of water. Keep the pigs from getting clean! Pigs don\'t like a bath, but pigs don\'t know pigs stink!</p>';
    $book_game_description .= '</div>';
    $book_game_description .= '<div class="instructions">';
      $book_game_description .= '<h3>Instructions:</h3>';
      $book_game_description .= '<ol class="instructions-list">';
        $book_game_description .= '<li><b>Choose between two different modes: Signs and Characters.</b> Practice your skills with either the alphabet in sign language, or written characters.</li>';
        $book_game_description .= '<li><b>Be brave and ramp up the max speed by setting a high number.</b><ul class="instructions-sublist"><li>"0" zero - recommended for toddlers.</li><li>"5" five - if you want to look cool in front of your friends.</li><li>"10" ten - if you want to get embarrassed.</li></ul></li>';
        $book_game_description .= '<li><b>Choose between two different modes: Signs and Characters.</b> Practice your skills with either the alphabet in sign language, or written characters.</li>';
        $book_game_description .= '<li><b>Crack your knuckles and get ready to rock! Press START!!!</b></li>';
      $book_game_description .= '</ol>';
    $book_game_description .= '</div>';
    $book_game_description .= '<div class="requirements">';
      $book_game_description .= '<h3>Requirements:</h3>';
      $book_game_description .= '<ul class="requirements-list">';
        $book_game_description .= '<li><b>Width of device 1024px or Greater.</b> For example: Desktop, Laptop, and iPad (in landscape view).</li>';
        $book_game_description .= '<li><b>Keyboard.</b> This is a typing game, so don\'t be lazy! Bust out your keyboard for some fast pig-time action!</li>';
      $book_game_description .= '</ul>';
    $book_game_description .= '</div>';
    $book_game_description .= '<div class="troubleshooting">';
      $book_game_description .= '<h3>Troubleshooting:</h3>';
      $book_game_description .= '<ul class="troubleshooting-list">';
        $book_game_description .= '<li><b>Why is the animation so choppy?</b> It could that you computer or touchpad is too slow. Try the "Still" version of the game, the animation starts to get choppy on slower devices.</li>';
        $book_game_description .= '<li><b>How do I turn off the music?</b> Music and all sound effects can be toggled by clicking on the sound edit button in the uppper-left corner on the game.</li>';
      $book_game_description .= '</ul>';
    $book_game_description .= '</div>';
    $book_game_description .= '<div class="study-guide">';
      $book_game_description .= '<h3>Study Guide:</h3>';
      $book_game_description .= '<p class="study-guide-description">Coming Soon!</p>';
    $book_game_description .= '</div>';
    $book_game_description .= '<div class="share">';
      $book_game_description .= '<h3 class="requirements-list">Share:</h3>';
      $book_game_description .= '<ul class="share-list">';
        $book_game_description .= '<li><a class="social-facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u='.get_permalink().'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
        $book_game_description .= '<li><a class="social-twitter" target="_blank" href="http://twitter.com/share?text='.$book_game_social.'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
        $book_game_description .= '<li><a class="social-email" href="mailto:?subject=Check this out!&amp;body=Check out this '.$book_game_social.'"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>';
      $book_game_description .= '</ul>';
      $book_game_description .= '<div class="clear"></div>';
    $book_game_description .= '</div>';
    require_once( get_template_directory() . '/template-parts/book-game-description.php' );
  ?>
  <!-- book-game-description - end -->

  <!-- recommendations -->
  <?php // require_once( get_template_directory() . '/template-parts/more-recommendations.php'); ?>
  <!-- recommendations - end -->

</div>
