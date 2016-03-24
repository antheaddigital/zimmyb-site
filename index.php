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
									<a href="<?php the_permalink() ?>">
										<div style="background-image: url('<?php echo $thumb_url; ?>')">
											<h3><?php the_title(); ?></h3>
											<!-- <p><?php //the_excerpt(__('(more…)')); ?></p> -->
										</div>
									</a>
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
									<a href="<?php the_permalink() ?>">
										<div style="background-image: url('<?php echo $thumb_url; ?>')">
											<h3><?php the_title(); ?></h3>
											<!-- <p><?php //the_excerpt(__('(more…)')); ?></p> -->
										</div>
									</a>
								</div>
							<?php
								endwhile;
								wp_reset_postdata();
							?>
							<div class="col-md-12"><a>more</a></div>

					</div>

					<div class="col-md-4">
						side bar
					</div>

				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
