<?php
/**
 * Hero Banner Template
 */

$base_url = esc_url(home_url('/')); // Base URL

$images = [
    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "First Image",
        "class" => "my-img h-100",
        "title" => "Welcome to Shimla",
        "description" => "Experience the serene beauty of the hills."
    ],
    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "Second Image",
        "class" => "my-img h-100",
        "title" => "Adventure Awaits",
        "description" => "Explore the mountains and valleys."
    ],
    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "Third Image",
        "class" => "my-img h-100",
        "title" => "Relax & Unwind",
        "description" => "Find peace in nature's embrace."
    ]
];
?>

<div class="header-background">
    <swiper-container 
        class="mySwiper"
        space-between="30"
        centered-slides="true"
        autoplay-delay="3500"
        autoplay-disable-on-interaction="true"
        loop="true"
        style="width:100%; height:100vh;">
        
        <?php foreach ($images as $img) : ?>
            <swiper-slide>
                <img src="<?php echo esc_url($base_url . ltrim($img['url'], '/')); ?>" 
                     alt="<?php echo esc_attr($img['alt']); ?>" 
                     class="<?php echo esc_attr($img['class']); ?>" 
                     style="width:100%; height:100vh; object-fit:cover;">
                     
                <div class="position-absolute w-100 h-100 bg-diagonal-tech d-flex align-items-center">
                    <div class="container text-white">
                        <h1><?php echo esc_html($img['title']); ?></h1>
                        <p><?php echo esc_html($img['description']); ?></p>
                    </div>
                </div>
            </swiper-slide>
        <?php endforeach; ?>
        
    </swiper-container>
</div>
