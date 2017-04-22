<footer class="footer">
	<div class="footer-border">
    <div class="footer-content">
			<div class="footer-site-nav">
				<ul class="content-nav">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="<?php echo esc_url( site_url() ); ?>/books">Books</a></li>
					<li><a href="<?php echo esc_url( site_url() ); ?>/games">Games</a></li>
					<!-- <li><a href="<?php //echo esc_url( site_url() ); ?>/learning">Learning</a></li>
					<li><a href="<?php //echo esc_url( site_url() ); ?>/blog">Blog</a></li>
					<li><a href="<?php //echo esc_url( site_url() ); ?>/news">News</a></li> -->
				</ul>
				<div>
					<a class="footer-mini-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/site/zimmy-books-logo-mini.png" alt="Zimmy Boooks! Logo" /></a>
				</div>
				<ul class="site-nav">
					<li><a href="<?php esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'about-us' ) ); ?>">About</a></li>
					<li><a href="<?php esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'contact-us' ) ); ?>">Contact</a></li>
					<li><a href="<?php esc_url( home_url( '/' ) ); echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a></li>
					<li><a href="<?php echo get_permalink( get_page_by_path( 'terms-of-service' ) ); ?>">Terms of Service</a></li>
				</ul>
				<div class="footer-copyright">
					&copy; <?php echo date("Y"); ?> Zimmy Books<br />property of <a href="http://antheaddigital.com">Anthead Digital</a>
				</div>
			</div>
		</div>
	</div>
</footer>
