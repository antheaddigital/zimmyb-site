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
  <meta charset="utf-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="msapplication-tap-highlight" content="no" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
  <title></title>
  <meta name="description" content="">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/books.css">
</head>
<?php
require_once( get_template_directory() . '/libs/mobile-detect/detect.php');
$device_type = Detect::deviceType();
?>
<body <?php body_class($device_type); ?>>
<input type="hidden" class="template-directory-uri-value" data-template-directory-uri="<?php echo get_template_directory_uri(); ?>" />
<!-- header-nav -->
<?php require_once( get_template_directory() . '/template-parts/header-nav.php'); ?>
<!-- header-nav - end -->
<div class="site-wrapper">
<div class="site-content-border">
<div class="site-content">
