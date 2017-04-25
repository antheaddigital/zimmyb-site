<script>
  window.bookPreload = {};
  window.bookPreload.setupManifest = function(templateDirectoryURI, bookName) {
    return manifest = [
      {
        src:  templateDirectoryURI + "/imgs/books/intro.jpg",
        id: "intro-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/colors.jpg",
        id: "colors-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/colors.jpg",
        id: "colors-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/colors.jpg",
        id: "colors-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/brown.jpg",
        id: "brown-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/brown.jpg",
        id: "brown-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/brown.jpg",
        id: "brown-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/green.jpg",
        id: "green-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/green.jpg",
        id: "green-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/green.jpg",
        id: "green-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/yellow.jpg",
        id: "yellow-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/yellow.jpg",
        id: "yellow-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/yellow.jpg",
        id: "yellow-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/black.jpg",
        id: "black-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/black.jpg",
        id: "black-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/black.jpg",
        id: "black-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/purple.jpg",
        id: "purple-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/purple.jpg",
        id: "purple-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/purple.jpg",
        id: "purple-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/white.jpg",
        id: "white-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/white.jpg",
        id: "white-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/white.jpg",
        id: "white-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/orange.jpg",
        id: "orange-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/orange.jpg",
        id: "orange-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/orange.jpg",
        id: "orange-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/red.jpg",
        id: "red-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/red.jpg",
        id: "red-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/red.jpg",
        id: "red-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/blue.jpg",
        id: "blue-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/blue.jpg",
        id: "blue-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/blue.jpg",
        id: "blue-signbox"
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

<div class="book-page page-planet-colors" data-book="planet-colors">

  <?php if($book_fullscreen == true){
      require_once( get_template_directory() . '/template-parts/book-full-page-please-rotate.php');
    }
  ?>

  <section class="book-section <?php if(isset($book_fullscreen_class)){ echo $book_fullscreen_class; } ?>">
    <div class="book-section-loader">Loading... <span></span></div>
    <div class="clear"></div>
    <div class="wrapper height-zero">
      <?php if($book_fullscreen == true){
          require( get_template_directory() . '/template-parts/book-full-page-nav.php');
        }
      ?>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- intro - slide 0 -->
          <div class="swiper-slide intro"></div>
          <!-- title -->
          <div class="swiper-slide colors"></div>
          <!-- page 01 -->
          <div class="swiper-slide brown"></div>
          <!-- page 02 -->
          <div class="swiper-slide green"></div>
          <!-- page 03 -->
          <div class="swiper-slide yellow"></div>
          <!-- page 04 -->
          <div class="swiper-slide black"></div>
          <!-- page 05 -->
          <div class="swiper-slide purple"></div>
          <!-- page 06 -->
          <div class="swiper-slide white"></div>
          <!-- page 07 -->
          <div class="swiper-slide orange"></div>
          <!-- page 08 -->
          <div class="swiper-slide red"></div>
          <!-- page 09 -->
          <div class="swiper-slide blue"></div>
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

  <?php if($book_fullscreen == true): ?>

  <?php else: ?>

    <!-- book-game-description -->
    <?php
      $book_game_social = 'Planet Colors https://goo.gl/fHnYzf';
      $book_game_title = 'planet-colors';
      $book_game_description = '<h1>Planet Colors</h1>';
      $book_game_description .= '<div class="description">';
        $book_game_description .= '<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>';
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
      require_once( get_template_directory() . '/template-parts/book-game-description.php');
    ?>
    <!-- book-game-description - end -->

    <!-- recommendations -->
    <?php // require_once( get_template_directory() . '/template-parts/more-recommendations.php'); ?>
    <!-- recommendations - end -->

  <?php endif; ?>

</div> <!-- book-page - end -->
