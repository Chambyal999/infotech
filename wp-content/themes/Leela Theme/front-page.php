<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();

  // Hero Banner
  get_template_part('/template-parts/header/hero-banner');

?>
   <main id="main" class="site-main">
  <div class="container-fluid">
    <?php 
  get_template_part('/template-parts/header/services-section');
  echo do_shortcode('[forminator_form id="105"]');
     ?>
  </div>

<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            // 🔹 Required for Elementor content
            the_content();
        }
    }
    ?>
</main>

<?php get_footer(); ?>
