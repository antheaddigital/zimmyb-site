<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

	<header>

	  <div class="container container-top-level header--wrapper">
	    <div class="header--logo">
	      <a href="http://zimmyb.com"><img src="" alt="Zimmy Boooks! Logo" /></a>
	    </div>
	    <div class="header--right-content">
				<ul class="nav navbar-nav">
					<li><a href="#">Books</a></li>
					<!-- <li><a href="#">Store</a></li> -->
					<li><a href="#">Blog</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">About</a></li>
				</ul>
			</div>
	  </div>

	  <div class="container container-top-level navbar-wrapper">
	    <nav class="navbar navbar-default">
	      <div class="container-fluid">
	        <!-- Mobile Toggle -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	        </div>
	        <!-- Header Navigation -->
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="#">Books</a></li>
	            <!-- <li><a href="#">Store</a></li> -->
	            <li><a href="#">Blog</a></li>
							<li><a href="#">News</a></li>
	            <li><a href="#">About</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>
	  </div>

	</header>

	<div id="content" class="site-content">
