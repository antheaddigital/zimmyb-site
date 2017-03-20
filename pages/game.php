<?php /* Template Name: Game */ ?>

<?php
global $post;
$post_slug = $post->post_name;
?>

<?php
// header libs
switch ($post_slug) {
  case 'save-the-pig':
    $header_libs = [
      'font-awesome',
      'magnific-popup'
    ];
    $css_file = 'save-the-pig';
    break;
  default:
    break;
}
require_once( get_template_directory() . '/header-game.php');
?>

<?php //echo zb_get_breadcrumb(false, $cat_name, $header_text); ?>

<?php
// game page
  switch ($post_slug) {
    case 'save-the-pig':
      require_once( get_template_directory() . '/pages/games/save-the-pig.php' );
      break;
    default:
      break;
  }
?>

<?php
// footer libs
switch ($post_slug) {
  case 'save-the-pig':
    $header_libs = [
      'jquery',
      'magnific-popup',
      'velocity',
      'preloadjs',
      'soundjs'
    ];
    $js_file = 'save-the-pig';
    break;
  default:
    break;
}
require_once( get_template_directory() . '/footer-game.php');
