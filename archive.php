<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php $category_array = get_the_category(); ?>
		<?php $cat_name = $category_array[0]->cat_name; ?>

		<?php
			switch($cat_name) {
				case 'Books':
					$header_text = 'Book Apps that Teach Kids Sign Language';
					break;
				case 'Blog':
					$header_text = 'Blog to Teach Kids Sign Language';
					break;
				case 'News':
					$header_text = 'News in the Zimmy Books World';
					break;
			}
		?>

		<!--
      * Custom page header function located in function.php
			* @headerPageClass
      * @headerText
    -->
    <?php echo zb_get_page_header('category-'.strtolower($cat_name), $header_text); ?>

		<!--
      * Custom breadcrumb function located in function.php
      * @page
    -->
    <?php echo zb_get_breadcrumb(false, $cat_name); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="archive-results-wrapper">
					<?php $category_array = get_the_category(); ?>
					<?php $category_name = $category_array[0]->cat_name; ?>
					<?php
					if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							 $post_id = get_the_ID();
							 switch($category_name){
								 case 'Books':
								 		$book_thumb_img_key = get_post_meta($post_id, 'book_thumb_img_key', true);
								 		$book_thumb_img_alt_key = get_post_meta($post_id, 'book_thumb_img_alt_key', true);

										echo '<div class="archive--book-results--book">
									 				<a href="'.get_permalink().'">
														<img class="img-responsive" src="' . get_template_directory_uri() . '/imgs/books/' . $book_thumb_img_key . '.jpg" alt="'. $book_thumb_img_alt_key .'" />
													</a>
												</div>';
									 		break;
								 case 'Blog':
								 	 $post_featured_img_key = get_post_meta($post_id, 'post_featured_img_key', true);
									 echo '<div class="archive--blog-results--post">
									 				<div class="archive--blog-results--post--img">
										 				<a href="'.get_permalink().'">
															<img class="img-responsive" src="' . get_template_directory_uri() . '/imgs/posts/blog/' . $post_featured_img_key . '.jpg" />
														</a>
													</div>
													<div class="archive--blog-results--post--description">
										 				<a class="archive--blog-results--post--description--title" href="'.get_permalink().'"><h3>'.get_the_title().'</h3></a>
														<div>
															<p class="archive--blog-results--post--description--date">'.get_the_date().'</p>
															<p class="archive--blog-results--post--description--content">'.wp_trim_words( get_the_content(), 25, null ).' <a class="archive--blog-results--post--description--read-more" href="'.get_permalink().'">read more.</a></p>
														</div>
													</div>
												</div>';
									 		break;
									case 'News':
										$post_featured_img_key = get_post_meta($post_id, 'post_featured_img_key', true);
										echo '<div class="archive--blog-results--post">
														<div class="archive--blog-results--post--img">
															<a href="'.get_permalink().'">
															<img class="img-responsive" src="' . get_template_directory_uri() . '/imgs/posts/news/' . $post_featured_img_key . '.jpg" />
														</a>
													</div>
													<div class="archive--blog-results--post--description">
															<a class="archive--blog-results--post--description--title" href="'.get_permalink().'"><h3>'.get_the_title().'</h3></a>
														<div>
															<p class="archive--blog-results--post--description--date">'.get_the_date().'</p>
															<p class="archive--blog-results--post--description--content">'.wp_trim_words( get_the_content(), 25, null ).' <a class="archive--blog-results--post--description--read-more" href="'.get_permalink().'">read more.</a></p>
														</div>
													</div>
												</div>';
											break;
							 }

						endwhile;
						// the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
					</div>
				</div>
				<div class="col-md-4">
					<?php include 'sidebar.php'; ?>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
