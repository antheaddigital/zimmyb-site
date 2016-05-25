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
    <?php echo zb_get_page_header('page-Contact', 'Contact'); ?>

    <!--
      * Custom breadcrumb function located in function.php
      * @page
    -->
    <?php echo zb_get_breadcrumb(false, 'Contact'); ?>

 		<div class="container container--page-Contact">
 			<div class="row">
        <div class="col-md-12">

 				</div>
 			</div> <!-- row -->
 		</div> <!-- container -->
 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
