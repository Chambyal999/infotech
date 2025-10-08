const renderProjects = (type) => {
  if (!allProjects[type]) return;

  grid.innerHTML = "";

  allProjects[type].forEach((p, i) => {
    // Create swiper slides from icon array
    const slides = (p.icons || [])
      .map(
        (img) => `
          <swiper-slide>
            <div class="d-flex justify-content-center">
              <img src="${img}" alt="${p.title}" class="services-logo"
                   style="width:80px; height:80px; object-fit:cover;">
            </div>
          </swiper-slide>
        `
      )
      .join("");

    grid.innerHTML += `
      <div class="col-lg-4 col-md-6 d-flex justify-content-center">
        <div class="service-card h-100 w-100 bg-white border border-2 border-dark" data-tilt>
          <div class="text-center mb-3">
            <swiper-container
              class="mySwiper"
              space-between="30"
              centered-slides="true"
              slides-per-view="1"
              autoplay-delay="2500"
              autoplay-disable-on-interaction="false"
              autoplay-pause-on-mouse-enter="true"
              loop="true"
            >
              ${slides}
            </swiper-container>
          </div>
          <h2>${p.title}</h2>
          <p>${p.description}</p>
          <a href="${p.button_link}" class="btn btn-success" target="_blank">${p.button_text}</a>
        </div>
      </div>
    `;
  });

  // Reinitialize Swiper after dynamic rendering
  const swiperEls = document.querySelectorAll('.mySwiper');
  swiperEls.forEach((el) => {
    new Swiper(el, {
      loop: true,
      autoplay: { delay: 2500, disableOnInteraction: false },
    });
  });
};
