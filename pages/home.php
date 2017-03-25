<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<!-- Custom header -->
<?php //echo zb_get_page_header('home', 'Sign Language Books for Kids and Toddlers'); ?>
<!-- Custom header - end -->

<!-- Breadcrumbs -->
<?php //echo zb_get_breadcrumb(true); ?>
<!-- Breadcrumbs - end -->

<!-- site-intro -->
<section class="site-intro">
  <div class="intro-wrapper">
    <div class="site-intro-description">
      <h1>Books and Games for Learning Sign Language</h1>
      <p>Welcome to Zimmy Books! Here you will learn sign lanuage in a very fun way. All learning material you find here at Zimmy Books is, and will always be, 100% free.<br />ALL AGES / EVERYBODY!</p>
    </div>
    <img class="zimmy-home img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmy-book-sign-1.png" />
    <div class="clear"></div>
  </div>
</section>
<!-- site-intro - end -->

<!-- books -->
<section class="books">
  <h2>Family Sign Language Books</h2>
  <div class="books-copy-wrapper">
    <div class="books-description">
      <h3>Planet Colors!</h2>
      <p>Travel around the world and learn the colors that make each location a special place to visit.</p>
      <a href="<?php echo esc_url( site_url() ); ?>/books/planet-colors">Read Now! ></a>
    </div>
    <a class="books-featured" href="<?php echo esc_url( site_url() ); ?>/books/planet-colors"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/home-book-featured.jpg" /></a>
    <div class="clear"></div>
  </div>
</section>
<!-- books - end -->

<!-- games -->
<section class="games">
  <h2>Sign Language Games for Everybody</h2>
  <div class="games-copy-wrapper">
    <a class="games-featured" href="<?php echo esc_url( site_url() ); ?>/games/save-the-pig"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/home-game-featured.jpg" /></a>
    <div class="games-description">
      <h3>Save the Pig!</h3>
      <p>Can you help Honkatonk Pig, Squiky Pig, War Pig, and Poopy Pig from getting their much needed baths? You will learn the alphebet in Sign Language and also how to type.</p>
      <a href="<?php echo esc_url( site_url() ); ?>/games/save-the-pig">Play Now! ></a>
    </div>
    <div class="clear"></div>
  </div>
</section>
<!-- games - end -->

<?php
get_footer();
