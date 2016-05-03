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

	<header class="header">

	  <div class="container container-top-level">
			<div class="row">
				<div class="col-md-12">
					<div class="header--wrapper">
				    <div class="header--logo">
				      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/05/zimmy-books-logo.png" alt="Zimmy Boooks! Logo" /></a>
				    </div>
				    <div class="header--right-content hidden-xs">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo get_cat_url('books'); ?>">Books</a></li>
								<li><a href="<?php echo get_cat_url('blog'); ?>">Blog</a></li>
								<li><a href="<?php echo get_cat_url('news'); ?>">News</a></li>
								<li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
							</ul>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
	  </div>

	</header>

	<div class="container container-top-level navbar-wrapper visible-xs">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo get_cat_url('books'); ?>">Books</a></li>
						<li><a href="<?php echo get_cat_url('blog'); ?>">Blog</a></li>
						<li><a href="<?php echo get_cat_url('news'); ?>">News</a></li>
						<li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>
	</div>

	<div id="content" class="site-content">
