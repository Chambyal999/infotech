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

<div class="h-100">
    <footer class="position-relative main-footer">
       
        <footer class="bg-black text-white text-start footer-container">
            <main class="d-flex flex-column mt-5">
                <div class="container py-5">
                    <div class="row pt-4">
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5>Travel</h5>
                            <p class="text-10 text-start">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit.</p>
                            <?php echo do_shortcode('[wpzoom_social_icons id="7"]'); ?>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5>Our Offices</h5>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-offices',
                                'menu_class' => 'list-unstyled footer-menu',
                                'container' => false
                            ));
                            ?>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5>Our Activities</h5>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-activities',
                                'menu_class' => 'list-unstyled',
                                'container' => false
                            ));
                            ?>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5>Travel Blogs</h5>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-blogs',
                                'menu_class' => 'list-unstyled',
                                'container' => false
                            ));
                            ?>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5>About Us</h5>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-about',
                                'menu_class' => 'list-unstyled',
                                'container' => false
                            ));
                            ?>
                        </div>
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5>Contact Us</h5>
                        <?php echo do_shortcode('[wpzoom_social_icons id="8"]'); ?>
                        <div>
                            <h6 class="text-start">Lotus lake Bhali</h6>
                            <p class="text-10 text-start">176206</p>
                            <p class="text-10 text-start">leelasonscorporation@gmail.com</p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="bg-secondary text-center p-2">© 2025 Leela Infotech | Built by Atul Chambyal</div>
            </main>
        </footer>
    </footer>
</div>
<?php wp_footer(); ?>
</body>

</html>