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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php $category_array = get_the_category(); ?>
					<h1><?php echo $category_array[0]->cat_name; ?></h1>
					<!-- <header class="page-header"> -->
						<?php
							//
							// echo '<pre>';
							// print_r($category_array);
							// echo '</pre>';
							// the_archive_title( '<h1 class="page-title">', '</h1>' );
							// the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					<!-- </header> -->
				</div>
			</div> <!-- row -->
			<div class="row">
				<div class="col-md-8">
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
							 switch($category_name){
								 case 'Books':
								 //echo get_the_title();
								 echo '<div class="category-books--book"><a href="'.get_permalink().'"><img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=700%C3%97750&w=700&h=750" /></a></div>';
								 //get_template_part( 'template-parts/content', get_post_format() );
								 break;
							 }

						endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
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
