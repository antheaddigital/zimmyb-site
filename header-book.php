<?php
/*
 * Error reporting
 */
// $wpdb->show_errors();
// $wpdb->print_error();
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
  if(isset($_GET['fullscreen']) && $_GET['fullscreen'] == 'true'){
    $book_fullscreen = true;
    $book_fullscreen_class = 'fullscreen';
  } else {
    $book_fullscreen = false;
    $book_fullscreen_class = 'siteview';
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
  <title></title>
  <meta name="description" content="">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=20170402.01">
</head>
<?php
require_once( get_template_directory() . '/libs/mobile-detect/detect.php');
$device_type = Detect::deviceType();
?>
<body <?php body_class($device_type); ?>>
<input type="hidden" class="template-directory-uri-value" data-template-directory-uri="<?php echo get_template_directory_uri(); ?>" />
<?php if($book_fullscreen == true): ?>

<?php else: ?>
  <!-- header-nav -->
  <?php require_once( get_template_directory() . '/template-parts/header-nav.php'); ?>
  <!-- header-nav - end -->
  <div class="site-wrapper">
  <div class="site-content-border">
  <div class="site-content">
<?php endif; ?>
