<?php
  global $post;
  $post_slug = $post->post_name;
  switch ($post_slug) {
    case 'planet-colors':
      $book_title = 'Planet Colors : https://goo.gl/vc8kZ5';
      break;
    case 'bayme-pants-the-sun-its-broken':
      $book_title = 'Bayme Pants - The Sun! It\'s Broken! : https://goo.gl/qEFGYc';
      break;
  }
?>

<div class="book-fullscreen-nav">
  <a class="site-nav book-fullscreen-nav-btn" data-menu-option="book-fullscreen-nav-site-popup" href="#book-fullscreen-site-nav-popup"><i class="fa fa-bars" aria-hidden="true"></i><br />menu</a>
  <a class="share book-fullscreen-nav-btn" data-menu-option="book-fullscreen-nav-share-popup" href="#book-fullscreen-share-nav-popup"><i class="fa fa-share-alt" aria-hidden="true"></i><br />share</a>
  <a class="back-to-siteview book-fullscreen-nav-btn" href="<?php echo get_permalink(); ?>"><i class="fa fa-arrow-left" aria-hidden="true"></i><br />back</a>
  <div class="book-fullscreen-nav-popup book-fullscreen-nav-site-popup">
    <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
    <a class="book-fullscreen-nav-popup-btn" href="<?php echo esc_url( site_url() ) ?>"><i class="fa fa-home" aria-hidden="true"></i><br />home</a>
    <a class="book-fullscreen-nav-popup-btn" href="<?php echo esc_url( site_url() ) ?>/books"><i class="fa fa-book" aria-hidden="true"></i><br />books</a>
    <a class="book-fullscreen-nav-popup-btn" href="<?php echo esc_url( site_url() ) ?>/games"><i class="fa fa-gamepad" aria-hidden="true"></i><br />games</a>
  </div>
  <div class="book-fullscreen-nav-popup book-fullscreen-nav-share-popup">
    <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
    <a class="book-fullscreen-nav-popup-btn" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a class="book-fullscreen-nav-popup-btn" target="_blank" href="http://twitter.com/share?text=<?php echo $book_title; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a class="book-fullscreen-nav-popup-btn" href="mailto:?subject=Check this out!&amp;body=Check out this <?php echo $book_title; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
  </div>
</div>
