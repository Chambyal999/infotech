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
     ?>
  </div>
<section class="bg-white">
  <div class="container">
    <h2 class="h2">Ready to build a stellar WordPress website?</h2>
    <p class="text-12">Fill the details & Our Project Manager will get in touch with you within several hours.</p>
    <?php 
  echo do_shortcode('[wpforms id="106" title="false"]');
     ?>
  </div>
</section>
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
