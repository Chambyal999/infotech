<?php 
/**
 * Header Navigation Template
 * @package customtheme
 */
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    
    <!-- Logo -->
     <div class="col-lg-6">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
    </a></div>

    <!-- Toggler Button (Mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu & CTA -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',       // Make sure to register this in functions.php
          'menu_class'     => 'navbar-nav ms-auto',
          'container'      => false,
          'depth'          => 2,                  // Supports dropdowns
          'fallback_cb'    => '__return_false',
          'walker'         => new Bootstrap_NavWalker(), // Optional: for Bootstrap dropdown support
        ));
      ?>

      <!-- CTA Button -->
      <div class="btn ms-3">
        <div class="bg_Orange shadow-bg-btn-orange border-radius-50 py-2 px-3 text-white">
          <?php echo do_shortcode('[xoo_el_pop text="{pop}Login/Signup{/pop}" type="login" change_to_text="{logout}{firstname}{/logout}"]'); ?>
        </div>
      </div>

    </div>
  </div>
</nav>
