<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package underscores
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="page-title-header page-title-header--search-results">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if ( have_posts() ) : ?>
							<h1 class="page-title-header--header"><?php printf( esc_html__( 'Search Results for: %s', 'underscores' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<?php else : ?>
							<h1 class="page-title-header--header"><?php printf( esc_html__( 'Nothing Found for: %s', 'underscores' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<?php endif; ?>
						<!-- <h1 class="page-title-header--header">Books Apps for Kids on iPhone and Android</h1> -->
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php
						if ( have_posts() ) : ?>
							<!-- <header class="page-header">
								<h1 class="page-title"><?php // printf( esc_html__( 'Search Results for: %s', 'underscores' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header> -->
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );
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
</section><!-- #primary -->

<?php
get_footer();
