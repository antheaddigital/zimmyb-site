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
          <div class="swiper-slide merry-christmas"></div>
          <!-- credits - after adding credits page apply slide number to window.appSettings.creditsSlide -->
          <div class="swiper-slide credits"></div>
          <!-- the end -->
          <div class="swiper-slide theend"></div>
        </div>
        <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
        <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
      </div>

    </div>
  </section> <!-- book-section - end -->

  <?php //endif; ?>

</div> <!-- book-page - end -->
