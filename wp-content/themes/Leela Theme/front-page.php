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
    
<main id="main" class="site-main bg-white">
    <div class="container">
        <div class="row">
            <div class="card col-lg-4" data-tilt>
            <h2>UI/UX Design</h2>
            <p>Elevate Your User Experience with GoatCode’s Expert UI/UX Design Services Crafting Intuitive and Engaging Digital Experiences for Your Audience At GoatCode, we specialize in creating</p>
            <a href="mailto:geekyprashant840@gmail.com" target="_blank" class="btn">Read More</a>
        </div>
        <div class="card col-lg-4" data-tilt>
            <h2>UI/UX Design</h2>
            <p>Elevate Your User Experience with GoatCode’s Expert UI/UX Design Services Crafting Intuitive and Engaging Digital Experiences for Your Audience At GoatCode, we specialize in creating</p>
            <a href="mailto:geekyprashant840@gmail.com" target="_blank" class="btn">Read More</a>
        </div>
        <div class="card col-lg-4" data-tilt>
            <h2>UI/UX Design</h2>
            <p>Elevate Your User Experience with GoatCode’s Expert UI/UX Design Services Crafting Intuitive and Engaging Digital Experiences for Your Audience At GoatCode, we specialize in creating</p>
            <a href="mailto:geekyprashant840@gmail.com" target="_blank" class="btn">Read More</a>
        </div>
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
