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
                        <div class="col-lg-4 col-md-6 mb-4">
                            <h5>Leela Infotech, Inc.</h5>
                            <p class="text-10 text-start">© 2017 Piroll. All rights reserved.</p>
                            <p>Designed by Atul Chambyal.</p>
                            <?php echo do_shortcode('[wpzoom_social_icons id="7"]'); ?>
                        </div>
                        <div class="col-lg-8">
                    <section class="row">
                        <div class="col-lg-6 col-md-12 mb-4">
                            <p>leelasonscorporation@gmail.com</p>
                            <a href="tel://+917807982499">+91 78079-82499</p>
                        </div>

                        
                        <section class="col-lg-6">
                            <div class="row">
                        <div class="col-lg-6 col-md-4 mb-4">
                           <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-activities',
                                'menu_class' => 'list-unstyled footer-menu',
                                'container' => false
                            ));
                            ?>
                        </div>
                        <div class="col-lg-6 col-md-4 mb-4">
                           <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-blogs',
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

                <div class="bg-secondary text-center p-2">© 2025 Leela Infotech | Built by Atul Chambyal</div>
            </main>
        </footer>
    </footer>
</div>
<?php wp_footer(); ?>
</body>

</html>