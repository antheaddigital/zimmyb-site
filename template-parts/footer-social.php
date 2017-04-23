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

<section class="footer-social">
  <div class="footer-social-wrapper">

    <div class="footer-social-item  footer-social-item-social">
      <h4>Follow Us</h4>
      <div class="footer-social-item-wrapper">
        <div class="footer-social-item-img footer-social-item-facebook">
          <a href="https://www.facebook.com/zimmybooks" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
        <div class="footer-social-item-img footer-social-item-twitter">
          <a href="https://twitter.com/ZimmyBooks" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <!-- <div class="footer-social-item-img footer-social-item-pintrist">
          <a href="" target="_blank"><i class="fa fa-pintrist" aria-hidden="true"></i></a>
        </div> -->
        <div class="footer-social-item-img footer-social-item-youtube">
          <a href="https://www.youtube.com/channel/UCW-9HVWTxsp2ZzszL8p5Wcw" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="footer-social-item footer-social-item-twitter-feed">
      <h4>Tweets</h4>
      <p>Feeds coming soon...</p>
    </div>
    <div class="footer-social-item footer-social-item-facebook-feed">
      <h4>Facebook</h4>
      <p>Feeds coming soon...</p>
    </div>
  </div>
</section>
