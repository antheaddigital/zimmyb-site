<?php get_header(); ?>


<?php
$obj = get_queried_object();
// echo '<pre>';
// print_r( $obj );
// echo '</pre>';
// echo $obj->cat_name;
?>

<?php //require_once( get_template_directory() . '/pages/books.php' ); ?>

<?php
	// switch($cat_name) {
	// 	case 'Books':
	// 		$header_text = 'Book Apps that Teach Kids Sign Language';
	// 		break;
	// 	case 'Blog':
	// 		$header_text = 'Blog to Teach Kids Sign Language';
	// 		break;
	// 	case 'News':
	// 		$header_text = 'News in the Zimmy Books World';
	// 		break;
	// }
?>

<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
  'post_type'      => 'page', // You can add a custom post type if you like
  'paged'          => $paged,
  'posts_per_page' => 10,
  'category_name' => $obj->cat_name,
));

if ( have_posts() ) : ?>

  <?php
  /* Start the Loop */
  while ( have_posts() ) : the_post();

    get_template_part( 'template-parts/content', get_post_format() );

  endwhile;

  the_posts_navigation();

else :

  get_template_part( 'template-parts/content', 'none' );

endif; ?>

<?php
get_footer();
