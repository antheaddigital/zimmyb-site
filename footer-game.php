      <!-- support-bar -->
      <?php // require_once( get_template_directory() . '/template-parts/support-bar.php'); ?>
      <!-- support-bar - end -->
      <!-- footer-social -->
      <?php //require_once( get_template_directory() . '/template-parts/footer-social.php'); ?>
      <!-- footer-social - end -->
      <!-- footer-nav -->
    	<?php //require_once( get_template_directory() . '/template-parts/footer-nav.php'); ?>
    	<!-- footer-nav - end -->
      <?php //require_once( get_template_directory() . '/template-parts/back-to-top.php'); ?>
    </div><!-- #site-content -->
  <!-- </div>#site-content-border -->

<!-- </div>#site-wrapper -->

<!-- JS Libs -->
<?php
  // foreach ($header_libs as $lib) {
  //   switch($lib){
  //     case 'jquery':
  //       echo '<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>';
  //       break;
  //     case 'magnific-popup':
  //       echo '<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>';
  //       break;
  //     case 'velocity':
  //       echo '<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.4.1/velocity.min.js"></script>';
  //       break;
  //     case 'preloadjs':
  //       echo '<script src="https://code.createjs.com/preloadjs-0.6.2.min.js"></script>';
  //       break;
  //     case 'soundjs':
  //       echo '<script src="https://code.createjs.com/soundjs-0.6.2.min.js"></script>';
  //       break;
  //   }
  // }
?>
<!-- Custom JS -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/velocity.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/preloadjs-0.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs/soundjs-0.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/<?php echo $js_file; ?>.js?ver=20170416.01"></script>
</body>
</html>
