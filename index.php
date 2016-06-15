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
	    <?php echo zb_get_breadcrumb(true); ?>

			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-8">

						<!-- CAROUSEL -->
						<!-- <div class="owl-carousel--temp">
							<a href=""><img src="<?php //echo get_template_directory_uri(); ?>/imgs/site/homepage-carousel-test-img-01.jpg" class="img-responsive" /></a>
						</div> -->
						<div class="homepage-slick-carousel">
							<!-- <div class="item">
								<a href=""><img src="<?php echo get_template_directory_uri(); ?>/imgs/site/homepage-carousel-test-img-01.jpg" class="img-responsive" /></a>
							</div> -->
							<!-- <div class="item">
								<a href=""><img src="<?php echo get_template_directory_uri(); ?>/imgs/site/homepage-carousel-test-img-02.jpg" class="img-responsive" /></a>
							</div>
							<div class="item">
								<a href=""><img src="<?php echo get_template_directory_uri(); ?>/imgs/site/homepage-carousel-test-img-03.jpg" class="img-responsive" /></a>
							</div> -->
						</div>

						<!-- BLOG -->
						<!-- <div class="col-sm-12 col-md-12 padding-reset"><h2><?php // esc_html_e( 'Blog', 'underscores' ); ?></h2></div> -->
						<?php
							$row = 1;
							$the_query_news = zb_get_most_recent_posts('blog', 1);
							while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
								// $thumb_id = get_post_thumbnail_id();
								// $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								// $thumb_url = $thumb_url_array[0];
								$post_id = get_the_ID();
								$post_featured_img_key = get_post_meta($post_id, 'post_featured_img_key', true);
								$post_featured_img_alt_key = get_post_meta($post_id, 'post_featured_img_alt_key', true);
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
										<img class="home--post--block--img img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/posts/blog/<?php echo $post_featured_img_key; ?>.jpg" alt="<?php echo $post_featured_img_alt_key; ?>" />
										<!-- <img class="home--recent-post--block--img img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=800%C3%97500&w=800&h=500" /> -->
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
							<a href="<?php // echo zb_get_cat_url('blog'); ?>"><?php // esc_html_e( 'more', 'underscores' ); ?></a>
						</div> -->

						<!-- NEWS -->
						<!-- <div class="col-sm-12 col-md-12 padding-reset"><h2><?php // esc_html_e( 'News', 'underscores' ); ?></h2></div> -->
						<?php
							$row = 1;
							$the_query_news = zb_get_most_recent_posts('news', 1);
							while ($the_query_news -> have_posts()) : $the_query_news -> the_post();
								// $thumb_id = get_post_thumbnail_id();
								// $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								// $thumb_url = $thumb_url_array[0];
								$post_id = get_the_ID();
								$post_featured_img_key = get_post_meta($post_id, 'post_featured_img_key', true);
								$post_featured_img_alt_key = get_post_meta($post_id, 'post_featured_img_alt_key', true);
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
										<img class="home--post--block--img img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/posts/news/<?php echo $post_featured_img_key; ?>.jpg" alt="<?php echo $post_featured_img_alt_key; ?>" />
										<!-- <img class="home--recent-post--block--img img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=800%C3%97500&w=800&h=500" /> -->
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
							<a href="<?php // echo zb_get_cat_url('news'); ?>"><?php // esc_html_e( 'more', 'underscores' ); ?></a>
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
