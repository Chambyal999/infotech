<?php
// Services array (example)
$services = [
  [ 'title'=>'UI/UX Design', 'desc'=>'Elevate your user experience...', 'button'=>'Read More' ],
  [ 'title'=>'Web Development', 'desc'=>'Robust, scalable web apps...', 'button'=>'Read More' ],
  [ 'title'=>'Digital Marketing', 'desc'=>'Data-driven marketing, SEO...', 'button'=>'Read More' ],
];
?>

<section class="services-section py-5">
  <div class="container">

    <div class="swiper myServicesSwiper">
      <div class="swiper-wrapper">

        <?php foreach ( $services as $svc ): ?>
          <div class="swiper-slide">
            <div class="card h-100 shadow-sm border-0 p-4 text-start">
              <h3 class="h5 mb-3 text-primary"><?php echo esc_html($svc['title']); ?></h3>
              <p class="mb-3"><?php echo esc_html($svc['desc']); ?></p>
              <a class="btn btn-outline-primary btn-sm rounded-pill"
                 href="mailto:leelasonscorporation@gmail.com" target="_blank">
                 <?php echo esc_html($svc['button']); ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>

      <!-- Swiper nav / pagination (optional) -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof Swiper === 'undefined') return;

  new Swiper('.myServicesSwiper', {
    loop: true,
    spaceBetween: 30,
    autoplay: {
      delay: 2200,
      disableOnInteraction: false,
    },
    slidesPerView: 1,       // default small screens
    breakpoints: {
      992: { slidesPerView: 3 }  // ≥992px -> 3 slides
      // add 768: { slidesPerView: 2 } if needed
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    speed: 500,
  });
});
</script>
