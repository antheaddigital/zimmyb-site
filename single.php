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

		<?php $category_array = get_the_category(); ?>
		<?php $cat_name = $category_array[0]->cat_name; ?>

		<?php
			switch($cat_name) {
				case 'Books':
					include 'books/_books.php';
					$post_id = get_the_ID();
					$book_copy_key = get_post_meta($post_id, 'book_copy_key', true);
					$header_text = $books_array[$book_copy_key]['full_title'];
					/*
			      * Custom page header function located in function.php
						* @headerPageClass
			      * @headerText
			    */
			    echo zb_get_page_header('post-book', $header_text);
					break;
				case 'Blog':
					$header_text = get_the_title();
					/*
			      * Custom page header function located in function.php
						* @headerPageClass
			      * @headerText
			    */
			    echo zb_get_page_header('post-blog', $header_text);
					break;
				case 'News':
					$header_text = get_the_title();
					/*
			      * Custom page header function located in function.php
						* @headerPageClass
			      * @headerText
			    */
			    echo zb_get_page_header('post-news', $header_text);
					break;
			}
		?>

		<!--
      * Custom breadcrumb function located in function.php
      * @page
    -->
    <?php echo zb_get_breadcrumb(false, $cat_name, $header_text); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php
						// https://developer.wordpress.org/reference/functions/get_the_category/
						$category_array = get_the_category();
						if($category_array[0]->cat_name == 'Books') :
					?>
						<?php
							//include '/books/_books.php';
							// https://developer.wordpress.org/reference/functions/get_the_id/
							//$post_id = get_the_ID();
							// NOT IN USE...
							// https://codex.wordpress.org/Function_Reference/wp_get_post_tags
							//$post_tag_array = wp_get_post_tags($post_id);
							//$book_tag = $post_tag_array[0]->name;
							//echo $book_tag;
							// https://codex.wordpress.org/Custom_Fields
							// https://developer.wordpress.org/reference/functions/get_post_meta/
							//$book_copy_key = get_post_meta($post_id, 'book_copy_key', true);
							//echo $book_copy_key;
							// echo '<pre>';
							// print_r($books_array[$book_copy_key]);
							// echo '</pre>';
							//echo '<h1>' . $books_array[$book_copy_key]['full_title'] . '</h1>';
							include 'books/'.$book_copy_key.'.php';
						?>
					<?php else: ?>
						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', get_post_format() );
								// the_post_navigation();
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
			</div> <!-- row -->
		</div> <!-- container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
