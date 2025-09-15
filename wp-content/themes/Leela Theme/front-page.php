<?php
// Base URL of your site
$base_url = "https://infotech.leelaholdings.in";

// Images array with title & description for overlay
$images = [
    [
        "url" => "/wp-content/uploads/2025/09/shimla.webp", 
        "alt" => "First Image", 
        "class" => "my-img",
        "title" => "Welcome to Shimla",
        "description" => "Experience the serene beauty of the hills."
    ],
    [
        "url" => "/wp-content/uploads/2025/09/image-24-scaled.jpg", 
        "alt" => "Second Image", 
        "class" => "my-img",
        "title" => "Adventure Awaits",
        "description" => "Explore the mountains and valleys."
    ],
    [
        "url" => "/wp-content/uploads/2025/09/image-23-scaled.jpg", 
        "alt" => "Third Image", 
        "class" => "my-img",
        "title" => "Relax & Unwind",
        "description" => "Find peace in nature's embrace."
    ],
    // Add remaining slides similarly...
];
?>

<main id="main" class="site-main">
    <div class="header-background">
        <swiper-container class="mySwiper" 
            space-between="30"
            centered-slides="true" 
            autoplay-delay="5500" 
            autoplay-disable-on-interaction="true">
            
            <?php foreach ($images as $img) : ?>
                <swiper-slide>
                    <div class="position-relative">
                        <!-- Slider Image -->
                        <img src="<?php echo $base_url . $img["url"]; ?>" 
                             alt="<?php echo $img["alt"]; ?>" 
                             class="<?php echo $img["class"]; ?>" 
                             style="width:100%; height:500px; object-fit:cover;">

                        <!-- Overlay -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary bg-gradient bg-opacity-50 d-flex align-items-center">
                            <div class="container text-white">
                                <h1><?php echo $img["title"]; ?></h1>
                                <p><?php echo $img["description"]; ?></p>
                            </div>
                        </div>
                    </div>
                </swiper-slide>
            <?php endforeach; ?>
        </swiper-container>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </div>

    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    }
    ?>
</main>
