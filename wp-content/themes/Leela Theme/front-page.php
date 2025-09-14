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
                    <div class="text">
                        <h2>We Design and Develop</h2>
                        <p>
                            We are a new design studio based in USA. We have
                            over 20 years of combined experience, and know a
                            thing or two about designing websites and mobile
                            apps
                        </p>
                        <button>contact us</button>
                    </div>
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