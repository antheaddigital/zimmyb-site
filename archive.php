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
			break;
		case 'Games':
			$hero_header_text = 'ASL Games Online';
			break;
		case 'Printables':
			$hero_header_text = 'ASL Printables';
			break;
	}
?>

<section class="hero hero-<?php echo strtolower($obj->cat_name); ?>" id="<?php echo strtolower($obj->cat_name); ?>-particles">
  <h1><?php echo $hero_header_text; ?></h1>
</section>

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

  <?php while ( have_posts() ) : the_post(); ?>

    <?php if( have_rows('search_results') ): ?>
      <?php while ( have_rows('search_results') ) : the_row(); ?>
        <?php if( get_row_layout() == 'content' ): ?>
          <a class="result result-<?php echo strtolower($obj->cat_name); ?>" href="<?php the_sub_field('link'); ?>">
						<img class="img-responsive" src="<?php the_sub_field('image'); ?>" />
					</a>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>

  <?php endwhile; ?>

</section>

<?php

  the_posts_navigation();

else :

  get_template_part( 'template-parts/content', 'none' );

endif; ?>

<?php
get_footer();
