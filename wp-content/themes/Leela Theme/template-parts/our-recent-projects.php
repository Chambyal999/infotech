<?php
// Story section about us
// Place this in your theme and include it in front-page or home template via get_template_part()

// Replace these with dynamic calls if you store them in ACF/options page


$services = [
    [
        'icon' => '/wp-content/uploads/2025/10/cropped-site-log-main-1.png',
        'title' => 'Leela Holdings',
        'description' => 'Corporate website for the parent company — elegant, professional, and strategic.',
        'button_text' => 'Discover Leela Tests',
        'button_link' => 'https://tests.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/10/programming.png',
        'title' => 'Leela Infotech',
        'description' => 'The main digital hub showcasing our services, vision, and client focus.',
        'button_text' => 'Discover Leela Infotech',
        'button_link' => 'https://infotech.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/10/retail.png',
        'title' => 'Leela Retail',
        'description' => 'Currently under development — bringing retail solutions to life online.',
        'button_text' => 'Discover Leela Wear',
        'button_link' => 'https://wear.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/10/tshirt.png',
        'title' => 'Leela Wear',
        'description' => 'Fashion meets tech — an evolving e-commerce experience in progress.',
        'button_text' => 'Discover Leela Transport',
        'button_link' => 'https://transport.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/10/transport.png',
        'title' => 'Leela Transport',
        'description' => 'Innovative logistics platform under construction to simplify transport systems.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/10/retail.png',
        'title' => 'Leela Test',
        'description' => 'Internal testing project for UI/UX optimization and performance trials.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ]
];
$upcoming_services = [
    [
        'icon' => '/wp-content/uploads/2025/10/retail.png',
        'title' => 'Founder Portfolio',
        'description' => 'Personal portfolio showcasing the vision and achievements of Leela Holdings founder.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/10/retail.png',
        'title' => 'Gym Website',
        'description' => 'Upcoming project — a sleek and energetic website for a fitness brand.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ],
    [
        'icon' => '/wp-content/uploads/2025/10/retail.png',
        'title' => 'Clinic Website',
        'description' => 'Upcoming medical website focusing on trust, simplicity, and accessibility.',
        'button_text' => 'Discover Leela Retail',
        'button_link' => 'https://retail.leelaholdings.in'
    ]
];

?>
<section class="services">
    <div class="container">
        <div class="row p-5">
            <main class="d-flex flex-column col-lg-6 col-md-12">
                <div class="services-swiper">
                    <swiper-container class="mySwiper" space-between="30" centered-slides="true" slides-per-view="1"
                        autoplay-delay="2500" autoplay-disable-on-interaction="false"
                        autoplay-pause-on-mouse-enter="true">

                        <?php foreach ($services as $service): ?>
                            <swiper-slide>
                                <div class="service-card h-100 w-100 bg-white" data-tilt>
                                    <div class="text-center mb-3 d-flex justify-content-center">
                                        <img src="<?php echo esc_url($service['icon']); ?>"
                                            alt="<?php echo esc_attr($service['title']); ?> Icon" class="services-logo"
                                            style="width:80px; height:80px; object-fit:cover;">
                                    </div>
                                    <h2><?php echo esc_html($service['title']); ?></h2>
                                    <p><?php echo esc_html($service['description']); ?></p>
                                    <a href="<?php echo esc_url($service['button_link']); ?>" class="btn btn-success"
                                        target="_blank">
                                        <?php echo esc_html($service['button_text']); ?>
                                    </a>
                                </div>
                            </swiper-slide>
                        <?php endforeach; ?>
                    </swiper-container>
                </div>

                <div class="upcoming-services-swiper">
                    <swiper-container class="mySwiper" space-between="30" centered-slides="true" slides-per-view="1"
                        autoplay-delay="2500" autoplay-disable-on-interaction="false"
                        autoplay-pause-on-mouse-enter="true">

                        <?php foreach ($upcoming_services as $upcoming_service): ?>
                            <swiper-slide>
                                <div class="service-card h-100 w-100 bg-white" data-tilt>
                                    <div class="text-center mb-3 d-flex justify-content-center">
                                        <img src="<?php echo esc_url($upcoming_service['icon']); ?>"
                                            alt="<?php echo esc_attr($upcoming_service['title']); ?> Icon"
                                            class="services-logo" style="width:80px; height:80px; object-fit:cover;">
                                    </div>
                                    <h2><?php echo esc_html($upcoming_service['title']); ?></h2>
                                    <p><?php echo esc_html($upcoming_service['description']); ?></p>
                                    <a href="<?php echo esc_url($upcoming_service['button_link']); ?>"
                                        class="btn btn-success" target="_blank">
                                        <?php echo esc_html($upcoming_service['button_text']); ?>
                                    </a>
                                </div>
                            </swiper-slide>
                        <?php endforeach; ?>
                    </swiper-container>
                </div>
            </main>
            <main class="about-section col-lg-6 col-md-12">
                <div class="p-3">
                    <h2 class="section-title mb-3 fw-bold">Our Recent Projects</h2>
                    <p class="lead">
                        Explore some of our recent projects where creativity meets performance.
                        Each one reflects our dedication to design and development excellence.
                    </p>
                </div>
                <div class="p-3">
                    <h2 class="section-title mb-3 fw-bold">Building the Future, One Project at a Time</h2>
                    <p class="lead">
                        At <strong>Leela Infotech</strong>, innovation never stops. Our team is currently developing a
                        range of new digital experiences — from modern e-commerce platforms like <strong>Leela
                            Retail</strong> and <strong>Leela Wear</strong>, to powerful service solutions such as
                        <strong>Leela Transport</strong> and <strong>Leela Test</strong>. We’re also crafting new
                        ventures like a <strong>Gym Website</strong> and a <strong>Clinic Website</strong> that redefine
                        how users connect, engage, and grow online.
                        <br><br>
                        Stay tuned as we continue expanding our digital ecosystem and delivering next-generation
                        products designed to make businesses smarter, faster, and more connected.
                    </p>
                </div>
                <div class="d-flex">
                    <a class="d-flex justify-content-center btn btn-success" target="_blank" href="/projects/">View More
                        Projects</a>
                </div>
            </main>
        </div>
    </div>
</section>