<?php
/*
 * Error reporting
 */
// $wpdb->show_errors();
// $wpdb->print_error();
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
?>
<!doctype html>
<html lang="en">
<head>
  <?php require_once( get_template_directory() . '/template-parts/gtm-head.php' ); ?>
  <meta charset="utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/imgs/site/favicon.png" />
  <title><?php wp_title(''); ?></title>
  <meta name="description" content="">
  <!-- CSS Libs -->
  <?php
    // foreach ($header_libs as $lib) {
    //   switch($lib){
    //     case 'font-awesome':
    //       echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">';
    //       break;
    //     case 'magnific-popup':
    //       echo '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>';
    //       break;
    //   }
    // }
  ?>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=20171217.02">
</head>
<?php
require_once( get_template_directory() . '/libs/mobile-detect/detect.php');
$device_type = Detect::deviceType();
?>
<body <?php body_class($device_type); ?>>
<?php require_once( get_template_directory() . '/template-parts/gtm-body.php' ); ?>
<input type="hidden" class="template-directory-uri-value" data-template-directory-uri="<?php echo get_template_directory_uri(); ?>" />
<!-- header-nav -->
<?php //require_once( get_template_directory() . '/template-parts/header-nav.php'); ?>
<!-- header-nav - end -->
<!-- <div class="site-wrapper">
<div class="site-content-border">
<div class="site-content"> -->
