<script>
  window.bookPreload = {};
  window.bookPreload.setupManifest = function(templateDirectoryURI, bookName) {
    return manifest = [
      {
        src:  templateDirectoryURI + "/imgs/books/intro.jpg",
        id: "intro-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/title.jpg",
        id: "title-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/sun.jpg",
        id: "sun-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/sun.jpg",
        id: "sun-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/sun.jpg",
        id: "sun-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/broken.jpg",
        id: "broken-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/broken.jpg",
        id: "broken-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/broken.jpg",
        id: "broken-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/sleep.jpg",
        id: "sleep-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/sleep.jpg",
        id: "sleep-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/sleep.jpg",
        id: "sleep-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/rabbit.jpg",
        id: "rabbit-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/rabbit.jpg",
        id: "rabbit-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/rabbit.jpg",
        id: "rabbit-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/fish.jpg",
        id: "fish-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/fish.jpg",
        id: "fish-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/fish.jpg",
        id: "fish-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/monkey.jpg",
        id: "monkey-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/monkey.jpg",
        id: "monkey-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/monkey.jpg",
        id: "monkey-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/moon.jpg",
        id: "moon-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/moon.jpg",
        id: "moon-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/moon.jpg",
        id: "moon-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/working.jpg",
        id: "working-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/working.jpg",
        id: "working-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/working.jpg",
        id: "working-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/credits.jpg",
        id: "credits-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/theend.jpg",
        id: "theend-page"
      }
    ];
  }
</script>

<div class="book-page page-bayme-pants-the-sun-its-broken" data-book="bayme-pants-the-sun-its-broken">

  <?php
    //if($book_fullscreen == true){
      require_once( get_template_directory() . '/template-parts/full-page-please-rotate.php');
    //}
  ?>

  <section class="book-section <?php if(isset($book_fullscreen_class)){ echo $book_fullscreen_class; } ?>">
    <div class="book-section-loader">Loading... <span></span></div>
    <div class="clear"></div>
    <div class="wrapper height-zero">
      <?php
        //if($book_fullscreen == true){
          require( get_template_directory() . '/template-parts/full-page-nav.php');
        //}
      ?>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- intro - slide 0 -->
          <div class="swiper-slide intro"></div>
          <!-- title -->
          <div class="swiper-slide title"></div>
          <!-- page 01 -->
          <div class="swiper-slide sun"></div>
          <!-- page 02 -->
          <div class="swiper-slide broken"></div>
          <!-- page 03 -->
          <div class="swiper-slide sleep"></div>
          <!-- page 04 -->
          <div class="swiper-slide rabbit"></div>
          <!-- page 05 -->
          <div class="swiper-slide fish"></div>
          <!-- page 06 -->
          <div class="swiper-slide monkey"></div>
          <!-- page 07 -->
          <div class="swiper-slide moon"></div>
          <!-- page 08 -->
          <div class="swiper-slide working"></div>
          <!-- credits - after adding credits page apply slide number to window.appSettings.creditsSlide -->
          <div class="swiper-slide credits"></div>
          <!-- the end -->
          <div class="swiper-slide theend"></div>
        </div>
        <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
        <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      </div>

    </div>
    <?php if($book_fullscreen != true): ?>
      <a class="fullscreen-btn" href="<?php echo get_permalink() . '?fullscreen=true'; ?>">CLICK TO VIEW BOOK <br />IN FULL SCREEN</a>
    <?php endif; ?>
  </section> <!-- book-section - end -->

  <?php //if($book_fullscreen == true): ?>

  <?php //else: ?>

    <!-- book-game-description -->
    <?php
      // $book_game_social = 'Bayme Pants - The Sun! It\'s Broken! https://goo.gl/ABNj5S via @ZimmyBooks';
      // $book_game_title = 'bayme-pants-the-sun-its-broken';
      // $book_game_description = '<h1>BAYME PANTS<br />THE SUN! IT\'S BROKEN</h1>';
      // $book_game_description .= '<div class="description">';
      //   $book_game_description .= '<p>Hang out with Bayme Pants as she goes on a dreamy adventure in search for why the sun is broken. Along the way, she meets Mr. Rabbit, Mr. Fish, and Mr. Monkey. Below is a list of signs you will learn with Bayme Pants and her friends.</p>';
      // $book_game_description .= '</div>';
      // $book_game_description .= '<div class="signs-learned">';
      //   $book_game_description .= '<h3>Signs You Will Learn:</h3>';
      //   $book_game_description .= '<p class="signs-learned-description">Sun, Broken, Sleep, Rabbit, Fish, Monkey, Moon, Working</p>';
      // $book_game_description .= '</div>';
      // $book_game_description .= '<div class="share">';
      //   $book_game_description .= '<h3>Share:</h3>';
      //   $book_game_description .= '<ul class="share-list">';
      //     $book_game_description .= '<li><a class="social-facebook" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u='.get_permalink().'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
      //     $book_game_description .= '<li><a class="social-twitter" target="_blank" href="http://twitter.com/share?text='.$book_game_social.'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
      //     $book_game_description .= '<li><a class="social-email" href="mailto:?subject=Check this out!&amp;body=Check out this '.$book_game_social.'"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>';
      //   $book_game_description .= '</ul>';
      //   $book_game_description .= '<div class="clear"></div>';
      // $book_game_description .= '</div>';
      // require_once( get_template_directory() . '/template-parts/book-game-description.php');
    ?>
    <!-- book-game-description - end -->

    <!-- recommendations -->
    <?php // require_once( get_template_directory() . '/template-parts/more-recommendations.php'); ?>
    <!-- recommendations - end -->

  <?php ///endif; ?>

</div> <!-- book-page - end -->
