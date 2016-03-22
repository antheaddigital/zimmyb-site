<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="container">

				<div class="row">

					<div class="col-md-8">
						
						<div class="col-md-12"><h2>Blog</h2></div>
							<?php
								$the_query_news = zimmy_get_most_recent_posts('blog', 2);
								while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
									$thumb_id = get_post_thumbnail_id();
									$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
									$thumb_url = $thumb_url_array[0];
							?>
								<div class="col-md-6">
									<div style="background-image: url('<?php echo $thumb_url; ?>')">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										<!-- <p><?php //the_excerpt(__('(more…)')); ?></p> -->
									</div>
								</div>
							<?php
								endwhile;
								wp_reset_postdata();
							?>
							<div class="col-md-12"><a>more</a></div>

						<div class="col-md-12"><h2>News</h2></div>
							<?php
								$the_query_news = zimmy_get_most_recent_posts('news', 2);
								while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
									$thumb_id = get_post_thumbnail_id();
									$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
									$thumb_url = $thumb_url_array[0];
							?>
								<div class="col-md-6">
									<div style="background-image: url('<?php echo $thumb_url; ?>')">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
										<!-- <p><?php //the_excerpt(__('(more…)')); ?></p> -->
									</div>
								</div>
							<?php
								endwhile;
								wp_reset_postdata();
							?>
							<div class="col-md-12"><a>more</a></div>

					</div>

					<div class="col-md-4">
						asdfasd
					</div>

				</div>

			</div>

		<?php
		//if ( have_posts() ) :

			//if ( is_home() && ! is_front_page() ) : ?>
				<!-- <header>
					<h1 class="page-title screen-reader-text"><?php // single_post_title(); ?></h1>
				</header> -->

			<?php
			//endif;

			/* Start the Loop */
			//while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_format() );

			//endwhile;

		// 	the_posts_navigation();
		//
		// else :
		//
		// 	get_template_part( 'template-parts/content', 'none' );
		//
		// endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
