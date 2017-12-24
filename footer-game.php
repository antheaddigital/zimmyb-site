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
      case 'preloadjs':
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/PreloadJS/1.0.1/preloadjs.min.js"></script>';
        break;
      case 'soundjs':
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/SoundJS/1.0.1/soundjs.min.js"></script>';
        break;
    }
  }
?>
<!-- Custom JS -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js?ver=20171223.01"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/<?php echo $js_file; ?>.js?ver=20171223.01"></script>
</body>
</html>
