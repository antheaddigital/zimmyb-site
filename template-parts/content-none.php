<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

?>

<?php
	$category = esc_html( $_GET["category"], 'underscores' );
	echo $category;
	$search_term = esc_html( $_GET["s"], 'underscores' );
	echo $search_term;
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'underscores' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'underscores' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'underscores' ); ?></p>

			<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
				<input type="search" class="search-field" placeholder="search" value="<?php get_search_query(); ?>" name="s" title="" />
				<input type="submit" class="search-submit" value="Search" />
			</form>

			<!-- get_search_form(); -->

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'underscores' ); ?></p>

			<?php // $category = htmlspecialchars($_GET["category"]); //echo $category;  ?>

			<form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
				<input type="search" class="search-field" placeholder="search" value="<?php get_search_query(); ?>" name="s" title="" />
				<input type="submit" class="search-submit" value="Search" />
			</form>

			<!-- get_search_form(); -->

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
