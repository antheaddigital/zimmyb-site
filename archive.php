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
			$hero_header_text = 'Sign Language Books for All Ages';
			break;
		case 'Games':
			$hero_header_text = 'Games for Teaching Sign Language';
			break;
		case 'Coloring':
			$hero_header_text = 'Coloring Books that Teach Kids Sign Language';
			break;
	}
?>

<section class="hero">
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

    <!-- get_template_part( 'template-parts/content', get_post_format() ); -->
        <?php if( have_rows('search_results') ): ?>
          <?php while ( have_rows('search_results') ) : the_row(); ?>
            <?php if( get_row_layout() == 'content' ): ?>
              <div class="result">
                <a class="result-img" href="<?php the_sub_field('link'); ?>"><img class="img-responsive" src="<?php the_sub_field('image'); ?>" /></a>
                <h3 class="result-header"><?php the_sub_field('title'); ?></h3>
                <div class="result-description"><?php the_sub_field('description'); ?></div>
                <a class="result-link" href="<?php the_sub_field('link'); ?>">Read Now! ></a>
              </div>
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
