<div class="book-page page-planet-colors">

  <?php if($book_fullscreen == true){
      require_once( get_template_directory() . '/template-parts/book-full-page-please-rotate.php');
    }
  ?>

  <section class="book-section <?php if(isset($book_fullscreen_class)){ echo $book_fullscreen_class; } ?>">
    <div class="wrapper">
      <?php if($book_fullscreen == true){
          require( get_template_directory() . '/template-parts/book-full-page-nav.php');
        }
      ?>
      <ul class="slider">
        <!-- intro - slide 0 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/intro.jpg" class="page-img img-responsive" />
        </li>
        <!-- title -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/title.jpg" class="page-img img-responsive" />
          <a href="#brown-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/colors.jpg" class="img-responsive" /></a>
          <div id="brown-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/colors.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 01 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/brown.jpg" class="page-img img-responsive" />
          <a href="#brown-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/brown.jpg" class="img-responsive" /></a>
          <div id="brown-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/brown.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 02 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/green.jpg" class="page-img img-responsive" />
          <a href="#green-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/green.jpg" class="img-responsive" /></a>
          <div id="green-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/green.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 03 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/yellow.jpg" class="page-img img-responsive" />
          <a href="#yellow-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/yellow.jpg" class="img-responsive" /></a>
          <div id="yellow-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/yellow.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 04 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/black.jpg" class="page-img img-responsive" />
          <a href="#black-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/black.jpg" class="img-responsive" /></a>
          <div id="black-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/black.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 05 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/purple.jpg" class="page-img img-responsive" />
          <a href="#purple-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/purple.jpg" class="img-responsive" /></a>
          <div id="purple-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/purple.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 06 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/white.jpg" class="page-img img-responsive" />
          <a href="#white-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/white.jpg" class="img-responsive" /></a>
          <div id="white-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/white.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 07 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/orange.jpg" class="page-img img-responsive" />
          <a href="#orange-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/orange.jpg" class="img-responsive" /></a>
          <div id="orange-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/orange.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 08 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/red.jpg" class="page-img img-responsive" />
          <a href="#red-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/red.jpg" class="img-responsive" /></a>
          <div id="red-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/red.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 09 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/blue.jpg" class="page-img img-responsive" />
          <a href="#blue-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/blue.jpg" class="img-responsive" /></a>
          <div id="blue-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/blue.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- credits - after adding credits page apply slide number to window.appSettings.creditsSlide -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/credits.jpg" class="page-img img-responsive" />
        </li>
        <!-- the end -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/the-end.jpg" class="page-img img-responsive" />
        </li>
      </ul>
    </div>
    <?php if($book_fullscreen != true): ?>
      <a class="fullscreen-btn" href="<?php echo get_permalink() . '?fullscreen=true'; ?>">CLICK TO VIEW BOOK IN FULL SCREEN</a>
    <?php endif; ?>
  </section> <!-- book-section - end -->

  <?php if($book_fullscreen == true): ?>

  <?php else: ?>

    <!-- book-game-description -->
    <?php
      $book_game_title = 'planet-colors';
      $book_game_description = '<h1>Planet Colors</h1>';
      $book_game_description .= '<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>';
      $book_game_description .= '<div class="share">';
        $book_game_description .= '<ul class="Share-list">';
          $book_game_description .= '<li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>';
          $book_game_description .= '<li><a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>';
        $book_game_description .= '</ul>';
      $book_game_description .= '</div>';
      require_once( get_template_directory() . '/template-parts/book-game-description.php');
    ?>
    <!-- book-game-description - end -->

    <!-- recommendations -->
    <?php // require_once( get_template_directory() . '/template-parts/more-recommendations.php'); ?>
    <!-- recommendations - end -->

  <?php endif; ?>

</div> <!-- book-page - end -->
