<?php
/**
 * Main template file.
 * 
 * @package leelaHoldings
 */
get_header();
?>
<?php
// Base URL of your site
$base_url = "https://infotech.leelaholdings.in";

// Image paths (relative to root)
$images = [
    [ "url" => "/wp-content/uploads/2025/09/shimla.webp", "alt" => "First Image", "class" => "my-img" ],
    [ "url" => "/wp-content/uploads/2025/09/image-24-scaled.jpg", "alt" => "Second Image", "class" => "my-img" ],
    [ "url" => "/wp-content/uploads/2025/09/image-23-scaled.jpg", "alt" => "Third Image", "class" => "my-img" ],
    [ "url" => "/wp-content/uploads/2025/09/image-19-scaled.jpg", "alt" => "Fourth Image", "class" => "my-img" ],
    [ "url" => "/wp-content/uploads/2025/09/image-16-scaled.jpg", "alt" => "Fifth Image", "class" => "my-img" ],
    [ "url" => "/wp-content/uploads/2025/09/image-13-scaled.jpg", "alt" => "Fifth Image", "class" => "my-img" ],
    [ "url" => "/wp-content/uploads/2025/09/image-9-scaled.jpg", "alt" => "Fifth Image", "class" => "my-img" ],
    [ "url" => "/wp-content/uploads/2025/09/image-4-scaled.jpg", "alt" => "Fifth Image", "class" => "my-img" ]

];
?>

<main id="main" class="site-main">
    <div class="header-background">

        <swiper-container class="mySwiper" 
            navigation="true" 
            space-between="30"
            centered-slides="true" 
            autoplay-delay="2500" 
            autoplay-disable-on-interaction="false">
            
            <?php foreach ($images as $img) : ?>
                <swiper-slide>
                    <img src="<?php echo $base_url . $img["url"]; ?>" 
                         alt="<?php echo $img["alt"]; ?>" 
                         class="<?php echo $img["class"]; ?>" 
                         style="width:100%; height:auto;">
                </swiper-slide>
            <?php endforeach; ?>
        </swiper-container>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
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
