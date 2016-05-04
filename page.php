<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php //$category_array = get_the_category(); ?>
		<?php //$cat_name = $category_array[0]->cat_name; ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php $page_title = get_the_title(); ?>
				<div class="page-title-header page-title-header--page-<?php echo str_replace(' ', '', $page_title); ?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<?php
									switch($page_title) {
										case 'About':
											echo '<h1 class="page-title-header--header">About</h1>';
											break;
										case 'Contact':
											echo '<h1 class="page-title-header--header">Contact</h1>';
											break;
										case 'Privacy Policy':
											echo '<h1 class="page-title-header--header">Privacy Policy</h1>';
											break;
										case 'Terms of Service':
											echo '<h1 class="page-title-header--header">Terms of Service</h1>';
											break;
									}
								?>
							</div>
						</div>
					</div>
				</div>
		<?php endwhile; ?>

		<div class="breadcrumb-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ol class="breadcrumb">
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
							<?php
								switch($page_title) {
									case 'About':
										echo '<li class="active">About</li>';
										break;
									case 'Contact':
										echo '<li class="active">Contact</li>';
										break;
									case 'Privacy Policy':
										echo '<li class="active">Privacy Policy</li>';
										break;
									case 'Terms of Service':
										echo '<li class="active">Terms of Service</li>';
										break;
								}
							?>
						</ol>
					</div>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						endwhile; // End of the loop.
					?>
				</div>
				<div class="col-md-4">
					<?php
						switch($page_title) {
							case 'About':
								echo '<div class="page--sidebar--contact-info">Contact Info</div>';
								break;
							case 'Contact':
								echo '';
								break;
							case 'Privacy Policy':
								echo '<div class="page--sidebar--contact-info">Contact Info</div>';
								break;
							case 'Terms of Service':
								echo '<div class="page--sidebar--contact-info">Contact Info</div>';
								break;
						}
					?>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
