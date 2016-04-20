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

						<!-- CAROUSEL -->
						<div class="owl-carousel">
							<div class="item">
								<a href=""><img src="http://cdn.lolwot.com/wp-content/uploads/2015/03/10-of-the-most-expensive-cars-in-the-world-1.jpg" /></a>
							</div>
							<div class="item">
								<a href=""><img src="http://flashymagazine.com/wp-content/uploads/2013/08/best-luxury-cars.jpg" /></a>
							</div>
						</div>

						<!-- FEATURED -->
						<div class="col-sm-12 col-md-12 padding-reset"><h2><?php esc_html_e( 'Featured', 'underscores' ); ?></h2></div>
						<?php
							$row = 1;
							$the_query_news = zimmy_get_most_recent_posts('books', 4);
							while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
								$post_id = get_the_ID();
								$post_thumb_key = get_post_meta($post_id, 'post_thumb_key', true);
						?>
								<?php if($row == 1) { ?>
									<div class="col-sm-6 col-md-6 padding-left-reset">
										<a href="<?php the_permalink() ?>">
											<div style="background-image: url('<?php echo $post_thumb_key; ?>')">
												<h3><?php the_title(); ?></h3>
												<!-- <p><?php //the_excerpt(__('(more…)')); ?></p> -->
											</div>
										</a>
									</div>
								<?php } ?>
								<?php if($row == 2) { ?>
									<div class="col-sm-6 col-md-6 padding-right-reset">
										<ul>
								<?php } ?>

								<?php if($row > 1) { ?>
									<li>
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</li>
								<?php } ?>

								<?php if($row == 4) { ?>
										</ul>
										<a href="<?php echo get_cat_url('blog'); ?>"><?php esc_html_e( 'more', 'underscores' ); ?></a>
									</div>
								<?php } ?>
						<?php
							++$row;
							endwhile;
							wp_reset_postdata();
						?>

						<!-- BLOG -->
						<div class="col-sm-12 col-md-12 padding-reset"><h2><?php esc_html_e( 'Blog', 'underscores' ); ?></h2></div>
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
										echo '<div class="col-sm-6 col-md-6 padding-left-reset">';
									} else {
										echo '<div class="col-sm-6 col-md-6 padding-right-reset">';
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
						<div class="col-sm-12 col-md-12 padding-reset">
							<a href="<?php echo get_cat_url('blog'); ?>"><?php esc_html_e( 'more', 'underscores' ); ?></a>
						</div>

						<!-- NEWS -->
						<div class="col-sm-12 col-md-12 padding-reset"><h2><?php esc_html_e( 'News', 'underscores' ); ?></h2></div>
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
										echo '<div class="col-sm-6 col-md-6 padding-left-reset">';
									} else {
										echo '<div class="col-sm-6 col-md-6 padding-right-reset">';
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
						<div class="col-sm-12 col-md-12 padding-reset">
							<a href="<?php echo get_cat_url('news'); ?>"><?php esc_html_e( 'more', 'underscores' ); ?></a>
						</div>

					</div>

					<div class="col-sm-4 col-md-4">
						<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
							<div class="input-group">
								<input type="search" class="search-field form-control" placeholder="search" value="<?php get_search_query(); ?>" name="s" title="" />
								<span class="input-group-btn">
									<input type="submit" class="search-submit btn btn-default" value="Search" />
								</span>
							</div>
						</form>
					</div>
				</div> <!-- row -->
			</div> <!-- container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
