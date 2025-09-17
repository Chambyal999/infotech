<?php
/**
 * Footer Template
 */
$footer_images = [
    'mailbox' => [
        'src' => get_template_directory_uri() . '/images/icons/mailbox.png',
        'alt' => 'Mailbox Icon'
    ],
    'logo' => [
        'src' => get_template_directory_uri() . '/images/icons/logo.png',
        'alt' => 'Travel Logo'
    ],
    'phone' => [
        'src' => get_template_directory_uri() . '/images/icons/phone.png',
        'alt' => 'Phone Icon'
    ],
];
?>
<!-- next previous button start  -->
<section class="container">
    <?php
// Define pages in strict order (replace IDs with your real ones)
$pages = array(
    132 => 'https://infotech.leelaholdings.in/ui-ux-design/',
    133 => 'https://infotech.leelaholdings.in/web-development/',
    134 => 'https://infotech.leelaholdings.in/digital-marketing/'
);

$current_id = get_the_ID();

if (array_key_exists($current_id, $pages)) {
    $keys = array_keys($pages);
    $current_index = array_search($current_id, $keys);

    echo '<div class="d-flex justify-content-between mt-4">';

    // Show Previous only if not the first page
    if ($current_index > 0) {
        $prev_url = $pages[$keys[$current_index - 1]];
        echo '<a href="' . esc_url($prev_url) . '" class="btn btn-primary">Previous</a>';
    } else {
        echo '<div></div>'; // Empty div to keep spacing
    }

    // Show Next only if not the last page
    if ($current_index < count($keys) - 1) {
        $next_url = $pages[$keys[$current_index + 1]];
        echo '<a href="' . esc_url($next_url) . '" class="btn btn-primary">Next</a>';
    }

    echo '</div>';
}
?>
</section>


<!-- next previous button end  -->

<!-- Footer start     -->
    <footer class="position-relative main-footer">
       
        <footer class="text-white text-start footer-container" style="background-color: #231f20;">
            <main class="d-flex flex-column">
                <div class="container py-5">
                    <div class="row pt-4 text-center">
                        <div class="col-lg-4 col-md-6">
                            <h5>Leela Infotech, Inc.</h5>
                            <p class="text-12">Designed by Atul Chambyal.</p>
                        </div>
                        <div class="col-lg-8 col-md-6">
                    <section class="row">
                        <div class="col-lg-6 col-md-6 col-12 mb-4 footer-menu ">
                             <p class="menu-item mb-0"><a href="mailto:leelasonscorporation@gmail.com">leelasonscorporation@gmail.com</a></p>
                            <p class="menu-item"><a href="tel:7807982499">+91 78079-82499</a></p>
                        </div>
 
                        
                        <section class="col-lg-6">
                            <div class="row">
                        <div class="col-lg-6 col-md-4 col-6 mb-4">
                           <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-1',
                                'menu_class' => 'list-unstyled footer-menu',
                                'container' => false
                            ));
                            ?>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6 mb-4">
                           <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu-2',
                                'menu_class' => 'list-unstyled footer-menu',
                                'container' => false
                            ));
                            ?>
                        </div>
                        </div>
                        </section>
                        </section>
                        </div>
                    </div>
                     <div class="social-media">
                                  <a href="#"><i class="fab fa-facebook"></i></a>
                                  <a href="#"><i class="fab fa-twitter"></i></a>
                                  <a href="#"><i class="fab fa-linkedin"></i></a>
                                  <a href="#"><i class="fab fa-github"></i></a>
                                  <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                </div>

                <div class="container">
                      <div class=" text-start px-5 border-top">© 2025 Leela INC. All rights reserved.</p></div>
                </div>
            </main>
        </footer>
    </footer>
<!-- Footer end -->
<?php wp_footer(); ?>
</body>

</html>