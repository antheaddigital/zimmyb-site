<?php //if($book_fullscreen == true): ?>

<?php //else: ?>
  <!-- support-bar -->
  <?php // require_once( get_template_directory() . '/template-parts/support-bar.php'); ?>
  <!-- support-bar - end -->
  <!-- footer-social -->
  <?php // require_once( get_template_directory() . '/template-parts/footer-social.php'); ?>
  <!-- footer-social - end -->
  <!-- footer-nav -->
  <?php //require_once( get_template_directory() . '/template-parts/footer-nav.php'); ?>
  <!-- footer-nav - end -->
  <?php //require_once( get_template_directory() . '/template-parts/back-to-top.php'); ?>
  <!--</div> #site-content -->
  <!--</div> #site-content-border -->
  <!-- </div>#site-wrapper -->
<?php //endif; ?>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/libs.js"></script>
<script type="text/javascript" src="https://code.createjs.com/preloadjs-0.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php //if($book_fullscreen == true): ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/books-fullscreen.js?ver=20170416.01"></script>
<?php //else: ?>
  <!-- <script type="text/javascript" src="<?php //echo get_template_directory_uri(); ?>/js/books.js?ver=20170416.02"></script> -->
<?php //endif; ?>
</body>
</html>
