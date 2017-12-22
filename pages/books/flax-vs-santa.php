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
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/flax.jpg",
        id: "flax-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/flax.jpg",
        id: "flax-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/flax.jpg",
        id: "flax-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/santa.jpg",
        id: "santa-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/santa.jpg",
        id: "santa-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/santa.jpg",
        id: "santa-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/cookies.jpg",
        id: "cookies-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/cookies.jpg",
        id: "cookies-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/cookies.jpg",
        id: "cookies-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/tree.jpg",
        id: "tree-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/tree.jpg",
        id: "tree-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/tree.jpg",
        id: "tree-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/present.jpg",
        id: "present-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/present.jpg",
        id: "present-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/present.jpg",
        id: "present-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/merrychristmas.jpg",
        id: "merrychristmas-page"
      },
      {
        src:  templateDirectoryURI + "/imgs/signs/merrychristmas.jpg",
        id: "merrychristmas-sign"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/sign-boxes/merrychristmas.jpg",
        id: "merrychristmas-signbox"
      },
      {
        src:  templateDirectoryURI + "/imgs/books/"+bookName+"/thankyou.jpg",
        id: "thankyou-page"
      }
    ];
  }
</script>

<div class="book-page page-flax-vs-santa" data-book="flax-vs-santa">

  <?php require_once( get_template_directory() . '/template-parts/full-page-please-rotate.php'); ?>

  <section class="book-section <?php if(isset($book_fullscreen_class)){ echo $book_fullscreen_class; } ?>">
    <div class="book-section-loader">Loading... <span></span></div>
    <div class="clear"></div>
    <div class="wrapper height-zero">
      <?php require( get_template_directory() . '/template-parts/full-page-nav.php'); ?>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- intro - slide 0 -->
          <div class="swiper-slide intro"></div>
          <!-- title -->
          <div class="swiper-slide title"></div>
          <!-- page 01 -->
          <div class="swiper-slide flax"></div>
          <!-- page 02 -->
          <div class="swiper-slide santa"></div>
          <!-- page 03 -->
          <div class="swiper-slide cookies"></div>
          <!-- page 04 -->
          <div class="swiper-slide tree"></div>
          <!-- page 05 -->
          <div class="swiper-slide present"></div>
          <!-- page 06 -->
          <div class="swiper-slide merrychristmas"></div>
          <!-- thank you - after adding credits page apply slide number to window.appSettings.creditsSlide -->
          <div class="swiper-slide thankyou">
            <div class="more-things-to-do-wrapper">
              <a class="more-things-to-do-link more-things-to-do-link-left" href="<?php echo esc_url( site_url() ); ?>/books/planet-colors/">
          			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/books/more-things-to-do/planet-colors.jpg" />
                <span class="books-and-games-type">book</span>
          		</a>
              <a class="more-things-to-do-link more-things-to-do-link-right" href="<?php echo esc_url( site_url() ); ?>/books/bayme-pants-the-sun-its-broken/">
          			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/books/more-things-to-do/bayme-pants-the-sun-its-broken.jpg" />
                <span class="books-and-games-type">book</span>
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
        <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      </div>

    </div>
  </section> <!-- book-section - end -->

  <?php //endif; ?>

</div> <!-- book-page - end -->
