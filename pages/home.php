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
    <div class="site-intro-description">
      <h1>ASL Books and Games for the Entire Family!</h1>
      <p>Welcome to Zimmy Books! Here you will learn sign language in a very fun way. All learning material you find here at Zimmy Books is, and will always be, 100% free.<span>ALL AGES / EVERYBODY!</span></p>
    </div>
    <img class="zimmy-home img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmy-book-sign-1.png" />
    <div class="clear"></div>
  </div>
</section>
<!-- site-intro - end -->

<!-- featured -->
<section class="featured">

  <h2>Featured Releases!</h2>

  <div class="featured-wrapper featured-left">
    <a class="featured-img featured-img-planet-colors" href="<?php echo esc_url( site_url() ); ?>/books/planet-colors"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/planet-colors-featured.jpg" /></a>
    <div class="featured-description featured-description-planet-colors">
      <h3>Planet Colors!</h2>
      <p>Travel around the world and learn the colors that make each location a special place to visit.</p>
      <a class="read-play-btn-01" href="<?php echo esc_url( site_url() ); ?>/books/planet-colors">read!</a>
    </div>
    <div class="clear"></div>
  </div>

  <div class="featured-wrapper featured-right">
    <a class="featured-img featured-img-bayme-pants-the-sun-its-broken" href="<?php echo esc_url( site_url() ); ?>/books/bayme-pants-the-sun-its-broken"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/the-sun-its-broken-featured.jpg" /></a>
    <div class="featured-description featured-description-bayme-pants-the-sun-its-broken">
      <h3>Bayme Pants - The Sun! It's Broken!</h3>
      <p>Hang out with Bayme Pants and friends as they try to find out why the sun is broken. The signs you will learn are: Sun, Moon, Fish, Monkey, Rabbit, and more.</p>
      <a class="read-play-btn-01" href="<?php echo esc_url( site_url() ); ?>/books/bayme-pants-the-sun-its-broken">read!</a>
    </div>
    <div class="clear"></div>
  </div>

  <div class="featured-wrapper featured-left">
    <a class="featured-img featured-img-save-the-pig" href="<?php echo esc_url( site_url() ); ?>/games/save-the-pig"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/save-the-pig-featured.jpg" /></a>
    <div class="featured-description featured-description-save-the-pig">
      <h3>Save the Pig!</h3>
      <p>Can you help Honkatonk Pig, Squiky Pig, War Pig, and Poopy Pig from getting their much needed baths? You will learn the alphebet in Sign Language and also how to type.</p>
      <a class="read-play-btn-01" href="<?php echo esc_url( site_url() ); ?>/games/save-the-pig">play!</a>
    </div>
    <div class="clear"></div>
  </div>

</section>
<!-- featured - end -->

<?php
get_footer();
