<?php
/*
 * @package Leela infotech
*/

get_header();
?>

<main class="error-404 not-found d-flex flex-column align-items-center justify-content-center text-center py-5">
    <div class="container">
        <h1 class="display-1 fw-bold text-primary mb-4 animate-float">404</h1>
        <p class="lead mb-4 text-muted">
            Oops! The page you’re looking for doesn’t exist.<br>
            But hey, we build websites that <strong>always work</strong> 😉
        </p>

        <div class="d-flex gap-3 justify-content-center">
            <a href="<?php echo home_url(); ?>" class="btn btn-dark btn-lg">
                Back to Home
            </a>
            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-lg">
                Contact Us
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
?>
