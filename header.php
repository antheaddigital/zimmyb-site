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
<header class="header"><?php require_once( get_template_directory() . '/template-parts/main-nav.php'); ?></header>
<div class="site-wrapper">
<div class="site-content">
	<!--
		* Custom page header function located in function.php
		* @pageClass
		* @pageText
	-->
	<?php echo zb_get_page_header('home', 'Sign Language Books for Kids and Toddlers'); ?>

	<!--
		* Custom breadcrumb function located in function.php
		* @pagesArray
	-->
	<?php //echo zb_get_breadcrumb(true); ?>
