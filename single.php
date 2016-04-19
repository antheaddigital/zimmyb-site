<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underscores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

		<?php

			// https://developer.wordpress.org/reference/functions/get_the_category/
			$category_array = get_the_category();

			if($category_array[0]->cat_name == 'Books') : ?>

			<?php

				include 'books.php';

				// https://developer.wordpress.org/reference/functions/get_the_id/
				$post_id = get_the_ID();

				// NOT IN USE...
				// https://codex.wordpress.org/Function_Reference/wp_get_post_tags
				//$post_tag_array = wp_get_post_tags($post_id);
				//$book_tag = $post_tag_array[0]->name;
				//echo $book_tag;

				// https://codex.wordpress.org/Custom_Fields
				// https://developer.wordpress.org/reference/functions/get_post_meta/
				$book_copy_key = get_post_meta($post_id, 'book_copy_key', true);
				//echo $book_copy_key;

				// echo '<pre>';
				// print_r($books_array[$book_copy_key]);
				// echo '</pre>';

				echo '<h1>' . $books_array[$book_copy_key]['series'] . ' in... ' . $books_array[$book_copy_key]['title'] . '</h1>';

			?>

		<?php else: ?>

			<?php //print_r(get_the_category()); ?>


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<?php endif; ?>

					</div>

					<div class="col-md-4">
						<?php include 'sidebar.php'; ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

// get_sidebar();
get_footer();
