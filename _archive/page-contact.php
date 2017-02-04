<?php

/**
 * Template Name: Contact
 */

 get_header(); ?>

 <div id="primary" class="content-area">
 	<main id="main" class="site-main" role="main">

    <!--
      * Custom page header function located in function.php
      * @headerPageClass
      * @headerText
    -->
    <?php echo zb_get_page_header('page-Contact', 'Contact Zimmy Books'); ?>

    <!--
      * Custom breadcrumb function located in function.php
      * @page
    -->
    <?php echo zb_get_breadcrumb(false, 'Contact'); ?>

 		<div class="container container--page-Contact">
 			<div class="row">
        <div class="col-md-12">
          <div class="contact-form--wrapper">
            <div class="contact-form--description">
              <p>So it looks like you would like to contact us. Please be very description with what you would like to contact us about. We are looking forward to you reaching out us. Thank you.
            </div>
            <div  class="contact-form--form">
              <?php echo do_shortcode('[contact-form-7 id="69" title="Contact form 1"]'); ?>
            </div>
          </div>
 				</div>
 			</div> <!-- row -->
 		</div> <!-- container -->
 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
