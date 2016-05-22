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

	<div class="footer-promos">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-promos--wrapper">

						<div class="footer-promos--section footer-promos--about-social">
							<h4>Follow Us</h4>
							<div class="footer-promos--about-social footer-promos--about-social--facebook">
								<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=75×75&w=75&h=75" />
							</div>
							<div class="footer-promos--about-social footer-promos--about-social--twitter">
								<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=75×75&w=75&h=75" />
							</div>
							<div class="footer-promos--about-social footer-promos--about-social--youtube">
								<img src="https://placeholdit.imgix.net/~text?txtsize=18&txt=75×75&w=75&h=75" />
							</div>
							<div>

							</div>
						</div>

						<div class="footer-promos--section footer-promos--twitter-feed">
							<h4>Recent Tweets</h4>
							<div>
								<p><span>2:14px</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
							</div>
							<div>
								<p><span>2:14px</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
							</div>
							<div>
								<p><span>2:14px</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
							</div>
						</div>
						<div class="footer-promos--section footer-promos--newsletter">
							<h4>Newsletter</h4>
							<form>
								<input type="text" />
								<button type="button">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer--site-nav footer--site-nav">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</li>
							<li><a href="<?php echo zb_get_cat_url('books'); ?>">Books</a></li>
							<li><a href="<?php echo zb_get_cat_url('blog'); ?>">Blog</a></li>
							<li><a href="<?php echo zb_get_cat_url('news'); ?>">News</a></li>
						</ul>
						<ul>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'terms-of-service' ) ); ?>">Terms of Service</a></li>
						</ul>
						<div>
							<a class="footer--mini-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/zimmy-books-logo-mini.png" alt="Zimmy Boooks! Logo" /></a>
						</div>
						<div class="footer--copyright">
							&copy; <?php echo date("Y"); ?> Zimmy Books<br />property of <a href="http://antheaddigital.com">Anthead Digital</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
