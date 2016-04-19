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
					<div class="col-sm-8 col-md-8">
						<div class="col-md-12 padding-reset"><h2>Blog</h2></div>
						<?php
							$row = 1;
							$the_query_news = zimmy_get_most_recent_posts('blog', 2);
							while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
								$post_id = get_the_ID();
								$post_thumb_key = get_post_meta($post_id, 'post_thumb_key', true);
						?>
								<?php
									if($row == 1) {
										echo '<div class="col-sm-6 padding-left-reset">';
									} else {
										echo '<div class="col-sm-6 padding-right-reset">';
									}
								?>
								<a href="<?php the_permalink() ?>">
									<div style="background-image: url('<?php echo $post_thumb_key; ?>')">
										<h3><?php the_title(); ?></h3>
										<!-- <p><?php //the_excerpt(__('(more…)')); ?></p> -->
									</div>
								</a>
							</div>
						<?php
							++$row;
							endwhile;
							wp_reset_postdata();
						?>
						<div class="col-md-12 padding-reset">
							<a href="<?php echo get_cat_url('blog'); ?>">more</a>
						</div>

						<div class="col-md-12 padding-reset"><h2>News</h2></div>
						<?php
							$row = 1;
							$the_query_news = zimmy_get_most_recent_posts('news', 2);
							while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
								$post_id = get_the_ID();
								$post_thumb_key = get_post_meta($post_id, 'post_thumb_key', true);
						?>
								<?php
									if($row == 1) {
										echo '<div class="col-sm-6 padding-left-reset">';
									} else {
										echo '<div class="col-sm-6 padding-right-reset">';
									}
								?>
								<a href="<?php the_permalink() ?>">
									<div style="background-image: url('<?php echo $post_thumb_key; ?>')">
										<h3><?php the_title(); ?></h3>
										<!-- <p><?php //the_excerpt(__('(more…)')); ?></p> -->
									</div>
								</a>
							</div>
						<?php
							++$row;
							endwhile;
							wp_reset_postdata();
						?>
						<div class="col-md-12 padding-reset">
							<a href="<?php echo get_cat_url('news'); ?>">more</a>
						</div>

					</div>

					<div class="col-sm-4 col-md-4">
						side bar
					</div>

				</div> <!-- row -->
			</div> <!-- container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
