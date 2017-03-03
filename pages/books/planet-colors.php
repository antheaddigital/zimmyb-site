<div class="book-page page-planet-colors">

  <section class="book-section <?php if(isset($book_fullscreen_class)){ echo $book_fullscreen_class; } ?>">
    <div class="wrapper">
      <div class="slider">
        <!-- intro - slide 0 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/intro.jpg" class="page-img img-responsive" />
        </div>
        <!-- title -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/title.jpg" class="page-img img-responsive" />
        </div>
        <!-- page 01 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/brown.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Sun.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/brown.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 02 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/green.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Broken.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/green.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 03 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/yellow.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Sleep.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/yellow.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 04 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/black.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Rabbitx2.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/black.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 05 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/purple.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Fish.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/purple.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 06 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/white.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Monkey.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/white.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 07 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/orange.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Moon.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/orange.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 08 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/red.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Working.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/red.jpg" class="img-responsive" /></a>
        </div>
        <!-- page 09 -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/blue.jpg" class="page-img img-responsive" />
          <a href="imgs/signs/Working.jpg" class="sign-link"><img src="<?php echo get_template_directory_uri(); ?>/imgs/books/sign-boxes/blue.jpg" class="img-responsive" /></a>
        </div>
        <!-- credits - after adding credits page apply slide number to window.appSettings.creditsSlide -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/credits.jpg" class="page-img img-responsive" />
        </div>
        <!-- the end -->
        <div class="slider-page">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/books/planet-colors/the-end.jpg" class="page-img img-responsive" />
        </div>
      </div>
    </div>
  </section> <!-- book-section - end -->

  <?php if($book_fullscreen == true): ?>

  <?php else: ?>
    <!-- game-description -->
    <?php
    $book_title = 'Planet Colors';
    $book_description = '<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>';
    require_once( get_template_directory() . '/template-parts/book-description.php'); ?>
    <!-- game-description - end -->
    <!-- site-promos -->
    <?php require_once( get_template_directory() . '/template-parts/book-promos.php'); ?>
    <!-- site-promos - end -->
  <?php endif; ?>

</div> <!-- book-page - end -->
