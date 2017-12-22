<?php get_header(); ?>


<?php
$obj = get_queried_object();
// $cat_array = get_the_category();
// $catetory = $cat_array[0]->cat_name;
// echo $catetory;
// echo '<pre>';
// print_r( $obj );
// echo '</pre>';
// echo $obj->cat_name;
?>

<?php //require_once( get_template_directory() . '/pages/books.php' ); ?>

<?php
	switch($obj->cat_name) {
		case 'Books':
			$hero_header_text = 'ASL Books Online';
			$books_and_games_type = 'book';
			$results_array = [
				[
					'link' => esc_url( site_url() ) . '/books/flax-vs-santa/',
					'thumb' => get_template_directory_uri() . '/imgs/site/archive-thumbs/flax-vs-santa.jpg'
				],
				[
					'link' => esc_url( site_url() ) . '/books/planet-colors/',
					'thumb' => get_template_directory_uri() . '/imgs/site/archive-thumbs/planet-colors.jpg'
				],
				[
					'link' => esc_url( site_url() ) . '/books/bayme-pants-the-sun-its-broken/',
					'thumb' => get_template_directory_uri() . '/imgs/site/archive-thumbs/the-sun-its-broken.jpg'
				]
			];
			break;
		case 'Games':
			$hero_header_text = 'ASL Games Online';
			$books_and_games_type = 'game';
			$results_array = [
				[
					'link' => esc_url( site_url() )  . '/games/save-the-pig/',
					'thumb' => esc_url( site_url() ) . '/wp-content/themes/zimmyb-site/imgs/site/archive-thumbs/save-the-pig.jpg'
				]
			];
			break;
		case 'Printables':
			$hero_header_text = 'ASL Printables';
			$books_and_games_type = 'printables';
			break;
	}
?>

<section class="hero hero-<?php echo strtolower($obj->cat_name); ?>" id="<?php echo strtolower($obj->cat_name); ?>-particles">
  <h1><?php echo $hero_header_text; ?></h1>
</section>

<!-- nav-simple -->
<?php require( get_template_directory() . '/template-parts/nav-simple.php'); ?>
<!-- nav-simple - end-->

<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts(array(
  'post_type'      => 'page', // You can add a custom post type if you like
  'paged'          => $paged,
  'posts_per_page' => 10,
  'category_name' => $obj->cat_name,
));

if ( have_posts() ) : ?>

<section class="archive-results">

	<?php foreach($results_array as $key => $value): ?>
		<a class="result result-<?php echo strtolower($obj->cat_name); ?>" href="<?php echo $value['link']; ?>">
			<img class="img-responsive" src="<?php echo $value['thumb'];; ?>" />
			<span class="books-and-games-type"><?php echo $books_and_games_type; ?></span>
		</a>
	<?php endforeach; ?>

</section>

<?php

  the_posts_navigation();

else :

  get_template_part( 'template-parts/content', 'none' );

endif; ?>

<?php
get_footer();
