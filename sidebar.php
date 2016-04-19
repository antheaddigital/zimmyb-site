<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php
		$category_array = get_the_category();
		// echo '<pre>';
		// print_r($category_array);
		// echo '</pre>'
	?>

	<form role="search" method="get" class="search-form" action="<?php echo get_site_url() . '/' . $category_array[0]->slug; ?>">
		<input type="search" class="search-field" placeholder="search" value="<?php get_search_query(); ?>" name="s" title="" />
		<input type="submit" class="search-submit" value="Search" />
	</form>

	<?php
		$category_array = get_the_category();
		// https://codex.wordpress.org/Function_Reference/wp_get_recent_posts
		$args = array(
			'numberposts' => 10,
			'orderby' => 'post_date',
			'category' => $category_array[0]->cat_ID,
			'numberposts' => '5',
			'post_status' => 'publish'
		);
		$recent_posts = wp_get_recent_posts( $args );
		echo '<ul>';
		foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
		}
		echo '</ul>';
	?>

	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
