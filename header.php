<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
<?php //require_once( get_template_directory() . '/template-parts/module-page-checks-settings.php'); ?>
<?php wp_head(); ?>
</head>
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
