<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<section class="contact-us-form">

  <h1>Contact Zimmy Books!</h1>

  <p class="contact-form-intro">Thank you for visiting Zimmy Books! Please feel free to contact us for any reason. Allow for up to a few days for us to get back to you.</p>

  <div class="contact-form-wrapper">
    <?php echo do_shortcode('[contact-form-7 title="Contact form 1"]'); ?>
  </div>

</section>

<?php
get_footer();
