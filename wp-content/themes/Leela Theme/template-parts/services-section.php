<?php
/**
 * Services section Template
 * @package Leela infotech
 */

if (is_front_page()) {
  ?>
  <main class="bg-white py-5">
    <div class="container">
      <div class="row g-4 justify-content-center services-grid">
        <div class="col-lg-4 col-md-6 d-flex justify-content-center">
          <div class="service-card h-100 w-100" data-tilt>
            <h2>UI/UX Design</h2>
            <p>Elevate Your User Experience with Leela infotech’s Expert UI/UX Design Services Crafting Intuitive and
              Engaging Digital Experiences for Your Audience At Leela infotech, we specialize in creating...</p>
            <a href="<?php echo esc_url(home_url('/services/ui-ux-design/')); ?>" class="btn" target="_blank">Read
              More</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex justify-content-center d-none d-md-block">
          <div class="service-card h-100 w-100" data-tilt>
            <h2>Web Development</h2>
            <p>Unlock Your Online Potential with Leela infotech's Expert Web Development Services Crafting Customized
              Websites to Power Your Digital Presence At Leela infotech, we are passionate about building...</p>
            <a href="<?php echo esc_url(home_url('/services/web-development/')); ?>" class="btn" target="_blank">Read
              More</a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex justify-content-center d-none d-lg-block">
          <div class="service-card h-100 w-100" data-tilt>
            <h2>Digital Marketing</h2>
            <p>Boost Your Online Presence with Leela infotech's Expert SEO Services Maximizing Your Visibility and Driving
              Results in the Digital Landscape At Leela infotech, we understand the importance...</p>
            <a href="<?php echo esc_url(home_url('/services/digital-marketing/')); ?>" class="btn" target="_blank">Read
              More</a>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php } else { ?>


  <?php
  // Array of services
  $services = [
    [
      'icon' => '/wp-content/uploads/2025/09/programming.png',
      'title' => 'Leela Infotech',
      'description' => 'The main digital hub showcasing our services, vision, and client focus.',
      'button_text' => 'Discover Leela Infotech',
      'button_link' => 'https://infotech.leelaholdings.in'
    ],
    [
      'icon' => '/wp-content/uploads/2025/09/retail.png',
      'title' => 'Leela Retail',
      'description' => 'Currently under development — bringing retail solutions to life online.',
      'button_text' => 'Discover Leela Retail',
      'button_link' => 'https://retail.leelaholdings.in'
    ],
    [
      'icon' => '/wp-content/uploads/2025/09/tshirt.png',
      'title' => 'Leela Wear',
      'description' => 'Fashion meets tech — an evolving e-commerce experience in progress.',
      'button_text' => 'Discover Leela Wear',
      'button_link' => 'https://wear.leelaholdings.in'
    ],
    [
      'icon' => '/wp-content/uploads/2025/09/transport.png',
      'title' => 'Leela Transport',
      'description' => 'Innovative logistics platform under construction to simplify transport systems.',
      'button_text' => 'Discover Leela Transport',
      'button_link' => 'https://transport.leelaholdings.in'
    ],
    [
      'icon' => '/wp-content/uploads/2025/09/education.png',
      'title' => 'Leela Tests',
      'description' => 'Internal testing project for UI/UX optimization and performance trials.',
      'button_text' => 'Discover Leela Tests',
      'button_link' => 'https://tests.leelaholdings.in'
    ]
  ];
  $Upcoming_services = [
    [
      'icon' => '/wp-content/uploads/2025/09/education.png',
      'title' => 'Founder Portfolio',
      'description' => 'Personal portfolio showcasing the vision and achievements of Leela Holdings founder.',
      'button_text' => 'Discover Leela Tests',
      'button_link' => 'https://tests.leelaholdings.in'
    ],
    [
      'icon' => '/wp-content/uploads/2025/09/education.png',
      'title' => 'Gym Website',
      'description' => 'Upcoming project — a sleek and energetic website for a fitness brand.',
      'button_text' => 'Discover Leela Tests',
      'button_link' => 'https://tests.leelaholdings.in'
    ],
    [
      'icon' => '/wp-content/uploads/2025/09/education.png',
      'title' => 'Clinic Website',
      'description' => 'Upcoming medical website focusing on trust, simplicity, and accessibility.',
      'button_text' => 'Discover Leela Tests',
      'button_link' => 'https://tests.leelaholdings.in'
    ]
  ];
  ?>
<section class="projects-container d-flex justify-content-evenly align-items-center gap-3">
<div class="w-100"><a class="btn btn-primary w-100 rounded-0" href="#">Complete Projects</a></div>
<div class="w-100"><a class="btn btn-primary w-100 rounded-0" href="#">Recent Projects</a></div>
<div class="w-100"><a class="btn btn-primary w-100 rounded-0" href="#">Upcoming Projects</a></div>
</div>


  <main class="bg-white py-5" id="leela-brands">
    <div class="container text-center shadow p-5">

      <h1 class="mb-2"><?php echo $heading; ?></h1>
      <p class="mb-5"><?php echo $paragraph; ?></p>

      <div class="row g-4 justify-content-center services-grid">

        <?php foreach ($services as $index => $service): ?>
          <div
            class="col-lg-4 col-md-6 d-flex justify-content-center <?php echo ($index > 0) ? 'd-none d-md-block' : ''; ?>">
            <div class="service-card h-100 w-100" data-tilt>
              <div class="text-center mb-3">
                <img src="<?php echo esc_url(home_url($service['icon'])); ?>"
                  alt="<?php echo esc_attr($service['title']); ?> Icon" class="services-logo"
                  style="width:80px; height:80px; object-fit:cover;">
              </div>
              <h2><?php echo esc_html($service['title']); ?></h2>
              <p><?php echo esc_html($service['description']); ?></p>
              <a href="<?php echo esc_url($service['button_link']); ?>" class="btn btn-success" target="_blank">
                <?php echo esc_html($service['button_text']); ?>
              </a>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </main>
<?php } ?>