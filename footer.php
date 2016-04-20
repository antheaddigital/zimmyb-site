<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer--site-nav">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</li>
							<li><a href="<?php echo get_cat_url('books'); ?>">Books</a></li>
							<li><a href="<?php echo get_cat_url('blog'); ?>">Blog</a></li>
							<li><a href="<?php echo get_cat_url('news'); ?>">News</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'terms-of-service' ) ); ?>">Terms of Service</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
