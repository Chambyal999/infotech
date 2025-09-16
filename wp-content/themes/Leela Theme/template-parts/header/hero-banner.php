<?php
// Base URL of your site
$base_url = "https://infotech.leelaholdings.in";

// Image data
$images = [
    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "First Image",
        "title" => "Welcome to Shimla",
        "description" => "Experience the serene beauty of the hills.",
        "button" => "Click Here"
    ],
    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "Second Image",
        "title" => "Adventure Awaits",
        "description" => "Explore the mountains and valleys.",
        "button" => "Click Here"
    ],
    [
        "url" => "/wp-content/uploads/2025/09/workers-scaled.jpg",
        "alt" => "Third Image",
        "title" => "Relax & Unwind",
        "description" => "Find peace in nature's embrace.",
        "button" => "Click Here"
    ]
];
?>

<div class="header-background position-relative">
  <swiper-container
      class="mySwiper"
      slides-per-view="1"
      space-between="30"
      autoplay-delay="2200"
      autoplay-disable-on-interaction="true"
      breakpoints='{"768": {"slidesPerView": 1}, "992": {"slidesPerView": 3}}'
      loop="true"
  >
    <?php foreach ($images as $img) : ?>
      <swiper-slide class="position-relative">
        <img src="<?php echo esc_url($base_url . $img['url']); ?>"
             alt="<?php echo esc_attr($img['alt']); ?>"
             class="img-fluid w-100 h-100 object-fit-cover" />

        <!-- Overlay content -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-flex align-items-center">
          <div class="container text-white">
            <h1 class="display-5 fw-bold"><?php echo esc_html($img['title']); ?></h1>
            <p class="lead mb-3"><?php echo esc_html($img['description']); ?></p>
            <a href="#" class="btn btn-primary"><?php echo esc_html($img['button']); ?></a>
          </div>
        </div>
      </swiper-slide>
    <?php endforeach; ?>
  </swiper-container>
</div>
