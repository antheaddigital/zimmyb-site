<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header><!-- .entry-header -->

	<?php
	if ( 'post' === get_post_type() ) : ?>
	<div class="feature-image-wrapper">
		<?php
			$post_id = get_the_ID();
			$post_featured_img_key = get_post_meta($post_id, 'post_featured_img_key', true);
			$post_featured_img_alt_key = get_post_meta($post_id, 'post_featured_img_alt_key', true);
			$category_array = get_the_category();
			$cat_name = $category_array[0]->cat_name;
		?>
		<img class="home--post--block--img img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/posts/<?php echo strtolower($cat_name); ?>/<?php echo $post_featured_img_key; ?>.jpg" alt="<?php echo $post_featured_img_alt_key; ?>" />
	</div><!-- .entry-meta -->
	<?php
	endif; ?>

	<?php
	if ( 'post' === get_post_type() ) : ?>
	<div class="entry-meta">
		<?php underscores_posted_on(); ?>
	</div><!-- .entry-meta -->
	<?php
	endif; ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'underscores' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php underscores_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
