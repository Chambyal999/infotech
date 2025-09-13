<?php 
/**
 * Header Navigation Template
 * @package customtheme
 */
?>
      
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <header class="container">
    <a class="navbar-brand" href="#">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'menu_class'     => 'navbar-nav ms-auto', // Bootstrap nav styling
          'container'      => false,
        ));
      ?>
    </div>
      </header>
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
</nav>