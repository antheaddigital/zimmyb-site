<div class="book-page page-bayme-pants-the-sun-its-broken">

  <?php if($book_fullscreen == true){
      require_once( get_template_directory() . '/template-parts/book-full-page-please-rotate.php');
    }
  ?>

  <section class="book-section <?php if(isset($book_fullscreen_class)){ echo $book_fullscreen_class; } ?>">
    <div class="wrapper">
      <?php if($book_fullscreen == true){
          require_once( get_template_directory() . '/template-parts/book-full-page-nav.php');
        }
      ?>
      <ul class="slider">
        <!-- intro - slide 0 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/intro.jpg" class="page-img img-responsive" />
        </li>
        <!-- title -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/title.jpg" class="page-img img-responsive" />
        </li>
        <!-- page 01 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/01.jpg" class="page-img img-responsive" />
          <a href="#brown-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/sun.jpg" class="img-responsive" /></a>
          <div id="brown-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/sun.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 02 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/02.jpg" class="page-img img-responsive" />
          <a href="#green-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/broken.jpg" class="img-responsive" /></a>
          <div id="green-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/broken.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 03 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/03.jpg" class="page-img img-responsive" />
          <a href="#yellow-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/sleep.jpg" class="img-responsive" /></a>
          <div id="yellow-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/sleep.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 04 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/04.jpg" class="page-img img-responsive" />
          <a href="#black-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/rabbit.jpg" class="img-responsive" /></a>
          <div id="black-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/rabbit.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 05 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/05.jpg" class="page-img img-responsive" />
          <a href="#purple-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/fish.jpg" class="img-responsive" /></a>
          <div id="purple-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/fish.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 06 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/06.jpg" class="page-img img-responsive" />
          <a href="#white-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/monkey.jpg" class="img-responsive" /></a>
          <div id="white-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/monkey.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 07 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/07.jpg" class="page-img img-responsive" />
          <a href="#orange-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/moon.jpg" class="img-responsive" /></a>
          <div id="orange-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/moon.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- page 08 -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/08.jpg" class="page-img img-responsive" />
          <a href="#red-sign" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/working.jpg" class="img-responsive" /></a>
          <div id="red-sign" class="mfp-hide white-popup-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/signs/working.jpg" class="img-responsive" />
          </div>
        </li>
        <!-- credits - after adding credits page apply slide number to window.appSettings.creditsSlide -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/credits.jpg" class="page-img img-responsive" />
        </li>
        <!-- the end -->
        <li class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/bayme-pants/the-sun-its-broken/the-end.jpg" class="page-img img-responsive" />
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
      $book_game_title = 'bayme-pants-the-sun-its-broken';
      $book_game_description = '<h1>Bayme Pants - The Sun! It\'s Broken!</h1>';
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
