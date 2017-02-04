    </div><!-- #site-content -->
  </div><!-- #site-content-border -->
  <!-- <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer--site-nav footer--site-nav">
            <ul>
              <li><a href="<?php //echo esc_url( home_url( '/' ) ); ?>">Home</li>
              <li><a href="<?php //echo zb_get_cat_url('books'); ?>">Books</a></li>
              <li><a href="<?php //echo zb_get_cat_url('blog'); ?>">Blog</a></li>
              <li><a href="<?php //echo zb_get_cat_url('news'); ?>">News</a></li>
            </ul>
            <ul>
              <li><a href="<?php //esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
              <li><a href="<?php //esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
              <li><a href="<?php //esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a></li>
              <li><a href="<?php //echo get_permalink( get_page_by_path( 'terms-of-service' ) ); ?>">Terms of Service</a></li>
            </ul>
            <div>
              <a class="footer--mini-logo" href="<?php //echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/imgs/site/zimmy-books-logo-mini.png" alt="Zimmy Boooks! Logo" /></a>
            </div>
            <div class="footer--copyright">
              &copy; <?php //echo date("Y"); ?> Zimmy Books<br />property of <a href="http://antheaddigital.com">Anthead Digital</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> -->

</div><!-- #site-wrapper -->

<!-- JS Libs -->
<?php
  foreach ($header_libs as $lib) {
    switch($lib){
      case 'jquery':
        echo '<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>';
        break;
      case 'magnific-popup':
        echo '<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>';
        break;
      case 'velocity':
        echo '<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.1/velocity.min.js"></script>';
        break;
    }
  }
?>
<!-- Custom JS -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/<?php echo $css_file; ?>.js"></script>
</body>
</html>
