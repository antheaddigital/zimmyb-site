<?php /* Template Name: Game */ ?>
<?php require_once( get_template_directory() . '/header-game.php'); ?>

<?php

  global $post;
  $post_slug = $post->post_name;

  switch ($post_slug) {
    case 'save-the-pig':
      require_once( get_template_directory() . '/pages/save-the-pig.php' );
      break;
    default:
      break;
  }

?>

<?php require_once( get_template_directory() . '/footer-game.php');
