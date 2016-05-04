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
			<div class="page-title-header page-title-header--home">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title-header--header">Books Apps for Kids on iPhone and Android</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-8">

						<!-- CAROUSEL -->
						<div class="owl-carousel--temp">
							<a href=""><img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=800%C3%97500&w=800&h=500" class="img-responsive" /></a>
						</div>
						<!-- <div class="owl-carousel">
							<div class="item">
								<a href=""><img src="http://cdn.lolwot.com/wp-content/uploads/2015/03/10-of-the-most-expensive-cars-in-the-world-1.jpg" /></a>
							</div>
							<div class="item">
								<a href=""><img src="http://flashymagazine.com/wp-content/uploads/2013/08/best-luxury-cars.jpg" /></a>
							</div>
						</div> -->

						<!-- BLOG -->
						<!-- <div class="col-sm-12 col-md-12 padding-reset"><h2><?php // esc_html_e( 'Blog', 'underscores' ); ?></h2></div> -->
						<?php
							$row = 1;
							$the_query_news = zimmy_get_most_recent_posts('blog', 1);
							while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
								$post_id = get_the_ID();
								$post_thumb_key = get_post_meta($post_id, 'post_thumb_key', true);
						?>
								<?php
									// if($row == 1) {
									// 	echo '<div class="col-sm-6 col-md-6 padding-left-reset">';
									// } else {
									// 	echo '<div class="col-sm-6 col-md-6 padding-right-reset">';
									// }
								?>
							<div class="col-md-6 home--recent-post--padding-left-reset">
								<div class="home--recent-post--block">
									<a class="home--recent-post--block--link" href="<?php the_permalink() ?>">
										<!-- <img class="home--post--block--img img-responsive" src="<?php //echo $post_thumb_key; ?>.jpg" /> -->
										<img class="home--recent-post--block--img img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=800%C3%97500&w=800&h=500" />
										<div class="home--recent-post--block--wrapper">
											<span class="home--recent-post--block--category">Blog</span>
											<span class="home--recent-post--block--divider">|</span>
											<h3><?php the_title(); ?></h3>
										</div>
									</a>
								</div>
							</div>
						<?php
							++$row;
							endwhile;
							wp_reset_postdata();
						?>
						<!-- <div class="col-sm-12 col-md-12 padding-reset">
							<a href="<?php // echo get_cat_url('blog'); ?>"><?php // esc_html_e( 'more', 'underscores' ); ?></a>
						</div> -->

						<!-- NEWS -->
						<!-- <div class="col-sm-12 col-md-12 padding-reset"><h2><?php // esc_html_e( 'News', 'underscores' ); ?></h2></div> -->
						<?php
							$row = 1;
							$the_query_news = zimmy_get_most_recent_posts('news', 1);
							while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0];
								$post_id = get_the_ID();
								$post_thumb_key = get_post_meta($post_id, 'post_thumb_key', true);
						?>
								<?php
									// if($row == 1) {
									// 	echo '<div class="col-sm-6 col-md-6 padding-left-reset">';
									// } else {
									// 	echo '<div class="col-sm-6 col-md-6 padding-right-reset">';
									// }
								?>
							<div class="col-md-6 home--recent-post--padding-right-reset">
								<div class="home--recent-post--block">
									<a class="home--recent-post--block--link" href="<?php the_permalink() ?>">
										<!-- <img class="home--post--block--img img-responsive" src="<?php //echo $post_thumb_key; ?>.jpg" /> -->
										<img class="home--recent-post--block--img img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=800%C3%97500&w=800&h=500" />
										<div class="home--recent-post--block--wrapper">
											<span class="home--recent-post--block--category">News</span>
											<span class="home--recent-post--block--divider">|</span>
											<h3><?php the_title(); ?></h3>
										</div>
									</a>
								</div>
							</div>
						<?php
							++$row;
							endwhile;
							wp_reset_postdata();
						?>
						<!-- <div class="col-sm-12 col-md-12 padding-reset">
							<a href="<?php // echo get_cat_url('news'); ?>"><?php // esc_html_e( 'more', 'underscores' ); ?></a>
						</div> -->

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
