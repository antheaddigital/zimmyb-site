			<?php
				global $post;
				$post_slug = $post->post_name;
				$page_array = [
					'contact-us',
					'privacy-policy',
					'terms-of-service'
				]
			?>
			<!-- support-bar -->
			<?php
				// if(!in_array($post_slug, $page_array)){
				// 	require_once( get_template_directory() . '/template-parts/support-bar.php');
				// }
			?>
			<!-- support-bar - end -->
			<!-- footer-social -->
			<?php
				// if(!in_array($post_slug, $page_array)){
				// 	require_once( get_template_directory() . '/template-parts/footer-social.php');
				// }
			?>
			<!-- footer-social - end -->
			<!-- footer-nav -->
			<?php require_once( get_template_directory() . '/template-parts/footer-nav.php'); ?>
			<!-- footer-nav - end -->
			<?php require_once( get_template_directory() . '/template-parts/back-to-top.php'); ?>
		</div><!-- #site-content -->
	</div><!-- #site-content-border -->

</div><!-- #site-wrapper -->

<?php wp_footer(); ?>

</body>
</html>
