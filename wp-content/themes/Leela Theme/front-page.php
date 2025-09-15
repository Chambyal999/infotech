<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();
?>


<main id="main" class="site-main">
  
<?php 
  // Hero Banner
  get_template_part('/template-parts/header/hero-banner');
    
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
