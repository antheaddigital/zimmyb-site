<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<!-- Custom header -->
<?php //echo zb_get_page_header('home', 'Sign Language Books for Kids and Toddlers'); ?>
<!-- Custom header - end -->

<!-- Breadcrumbs -->
<?php //echo zb_get_breadcrumb(true); ?>
<!-- Breadcrumbs - end -->

<!-- site-intro -->
<section class="site-intro" id="home-particles">
  <div class="intro-wrapper">
    <h1>ASL Online Learning for Kids!</h1>
    <!-- <h1>ASL Books and Games for the Entire Family!</h1>
    <p>Welcome to Zimmy Books! Here you will learn sign language in a very fun way. All online learning material at Zimmy Books is, and will always be, 100% free.<span>ALL AGES / EVERYBODY!</span></p> -->
  </div>
</section>
<!-- site-intro - end -->

<!-- nav-simple -->
<?php require( get_template_directory() . '/template-parts/nav-simple.php'); ?>
<!-- nav-simple - end-->

<!-- books-and-games -->
<section class="books-and-games">

  <!-- <h2>Books & Games</h2> -->

  <div class="books-and-games-wrapper">

    <a class="books-and-games-wrapper-book" href="<?php echo esc_url( site_url() ); ?>/books/planet-colors">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/planet-colors-featured.jpg" />
      <span class="books-and-games-type">book</span>
    </a>

    <a class="books-and-games-wrapper-book" href="<?php echo esc_url( site_url() ); ?>/books/bayme-pants-the-sun-its-broken">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/the-sun-its-broken-featured.jpg" />
      <span class="books-and-games-type">book</span>
    </a>

    <a class="books-and-games-wrapper-game" href="<?php echo esc_url( site_url() ); ?>/games/save-the-pig">
      <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/save-the-pig-featured.jpg" />
      <span class="books-and-games-type">game</span>
    </a>

  </div>

</section>
<!-- books-and-games - end -->

<!-- printables -->
<!-- <section class="printables">

  <h2>Printables</h2>

  <div class="printables-wrapper">

    <a class="printables-wrapper" href="<?php //echo esc_url( site_url() ); ?>/books/planet-colors">
      <img class="img-responsive" src="<?php // echo get_template_directory_uri(); ?>/imgs/site/planet-colors-featured.jpg" />
    </a>

  </div>

</section> -->
<!-- printables - end -->

<?php
get_footer();
