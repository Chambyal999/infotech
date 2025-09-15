<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();

  get_template_part('/template-parts/header/hero-banner');

?>


  // Hero Banner
    
<main id="main" class="site-main">
    <div class="container">
        <div class="card" data-tilt>
          
            <h2>UI/UX Design</h2>
            <p style="font-size: 12 !important;">Elevate Your User Experience with GoatCode’s Expert UI/UX Design Services Crafting Intuitive and Engaging Digital Experiences for Your Audience At GoatCode, we specialize in creating</p>
            <a href="mailto:geekyprashant840@gmail.com" target="_blank" class="btn">Read More</a>
        </div>
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
