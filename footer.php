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

						<div class="footer-promos--section">
							<h4>Follow Us</h4>
							<div class="footer-promos--about-social-wrapper">
								<div class="footer-promos--about-social footer-promos--about-social--facebook">
									<a href="https://www.facebook.com/zimmybooks" target="_blank">
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmybooks-facebook.png" alt="Zimmy Books on Facebook" />
									</a>
								</div>
								<div class="footer-promos--about-social footer-promos--about-social--twitter">
									<a href="https://twitter.com/ZimmyBooks" target="_blank">
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmybooks-twitter.png" alt="Zimmy Books on Twitter" />
									</a>
								</div>
								<!-- <div class="footer-promos--about-social footer-promos--about-social--pintrist">
									<a href="" target="_blank">
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmybooks-pintrist.png" alt="Zimmy Books on Pintrist" />
									</a>
								</div> -->
								<div class="footer-promos--about-social footer-promos--about-social--youtube">
									<a href="https://www.youtube.com/channel/UCW-9HVWTxsp2ZzszL8p5Wcw" target="_blank">
										<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmybooks-youtube.png" alt="Zimmy Books on Youtube" />
									</a>
								</div>
							</div>
						</div>

						<div class="footer-promos--section footer-promos--twitter-feed">
							<h4>Recent Tweets</h4>
							<!-- <div>
								<p><span>2:14px</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
							</div>
							<div>
								<p><span>2:14px</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
							</div>
							<div>
								<p><span>2:14px</span> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature.</p>
							</div> -->
						</div>
						<div class="footer-promos--section footer-promos--newsletter">
							<h4>Newsletter</h4>
							<p>When will you receive emails from us? Here's a list:</p>
							<ul>
								<li>Latest releases</li>
								<li>New blog posts</li>
								<li>New content</li>
							</ul>

							<form>
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Name" />
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Email" />
								</div>
								<button type="submit" class="btn btn-default">Sign up</button>
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
							<li><a href="<?php esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'about' ) ); ?>">About</a></li>
							<li><a href="<?php esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Contact</a></li>
							<li><a href="<?php esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a></li>
							<li><a href="<?php echo get_permalink( get_page_by_path( 'terms-of-service' ) ); ?>">Terms of Service</a></li>
						</ul>
						<div>
							<a class="footer--mini-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmy-books-logo-mini.png" alt="Zimmy Boooks! Logo" /></a>
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
