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
   <main id="main" class="site-main bg-white py-5">
  <div class="container">
    <div class="row g-4 justify-content-center services-grid">

      <div class="col-lg-4 col-md-6">
        <div class="card h-100" data-tilt>
          <img src="/path/to/icon1.svg" alt="UI Icon" class="card-icon mx-auto d-block" />
          <h2>UI/UX Design</h2>
          <p>Elevate your user experience with expert UI/UX design—intuitive, beautiful, and conversion-focused.</p>
          <a href="mailto:geekyprashant840@gmail.com" class="btn" target="_blank">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card h-100" data-tilt>
          <img src="/path/to/icon2.svg" alt="Web Icon" class="card-icon mx-auto d-block" />
          <h2>Web Development</h2>
          <p>Robust, scalable web apps built with modern stacks and best practices for performance and security.</p>
          <a href="mailto:geekyprashant840@gmail.com" class="btn" target="_blank">Read More</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card h-100" data-tilt>
          <img src="/path/to/icon3.svg" alt="Marketing Icon" class="card-icon mx-auto d-block" />
          <h2>Digital Marketing</h2>
          <p>Data-driven marketing, SEO and social strategies to grow traffic and conversions.</p>
          <a href="mailto:geekyprashant840@gmail.com" class="btn" target="_blank">Read More</a>
        </div>
      </div>

    </div><!-- /.row -->
  </div><!-- /.container -->
  
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
