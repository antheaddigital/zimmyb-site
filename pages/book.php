<?php /* Template Name: Book */ ?>

<?php

global $post;
$post_slug = $post->post_name;
// if(isset($_GET['mode'])){
//   $mode = $_GET['mode'];
// }

require_once( get_template_directory() . '/header-book.php');

switch ($post_slug) {
  case 'bayme-pants-the-sun-its-broken':
    require_once( get_template_directory() . '/pages/books/bayme-pants-the-sun-its-broken.php' );
    break;
  case 'planet-colors':
    require_once( get_template_directory() . '/pages/books/planet-colors.php' );
    break;
  default:
    break;
}

require_once( get_template_directory() . '/footer-book.php');
