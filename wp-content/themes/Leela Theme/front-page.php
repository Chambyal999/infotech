<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();
?>
<main id="main" class="site-main">
      <div class="header-background">
    
      <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
    <swiper-slide> </swiper-slide>
    <swiper-slide>Slide 2</swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>
    <swiper-slide>Slide 4</swiper-slide>
    <swiper-slide>Slide 5</swiper-slide>
    <swiper-slide>Slide 6</swiper-slide>
    <swiper-slide>Slide 7</swiper-slide>
    <swiper-slide>Slide 8</swiper-slide>
    <swiper-slide>Slide 9</swiper-slide>
  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

                </div>


                 <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();

            // 🔹 THIS is required for Elementor to work
            the_content();
        }
    }
    ?>


            </main>

<?php
get_footer();