document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".project-btn");
  const grid = document.querySelector(".services-grid");
  const allProjects = projectData.allProjects;
  const siteUrl = projectData.siteUrl;

  let swiperInstances = [];

  const renderProjects = (type) => {
    if (!allProjects[type]) return;

    // Clear existing grid
    grid.innerHTML = "";

    // Destroy previous Swiper instances
    swiperInstances.forEach(swiper => swiper.destroy(true, true));
    swiperInstances = [];

    allProjects[type].forEach((project, index) => {
      const col = document.createElement("div");
      col.className = "col-lg-4 col-md-6 d-flex justify-content-center";

      // Create project card
      col.innerHTML = `
        <div class="service-card h-100 w-100" data-tilt>
          <div class="text-center mb-3">
            <div class="swiper project-swiper-${type}-${index}">
              <div class="swiper-wrapper">
                ${project.icons.map(icon => `
                  <div class="swiper-slide">
                    <img src="${siteUrl}${icon}" alt="${project.title}" style="width:80px;height:80px;object-fit:cover;">
                  </div>
                `).join('')}
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <h2>${project.title}</h2>
          <p>${project.description}</p>
          <a href="${project.button_link}" class="btn btn-success" target="_blank">${project.button_text}</a>
        </div>
      `;

      grid.appendChild(col);

      // Initialize Swiper for this card
      const swiper = new Swiper(`.project-swiper-${type}-${index}`, {
        loop: true,
        navigation: {
          nextEl: `.project-swiper-${type}-${index} .swiper-button-next`,
          prevEl: `.project-swiper-${type}-${index} .swiper-button-prev`,
        },
        pagination: {
          el: `.project-swiper-${type}-${index} .swiper-pagination`,
          clickable: true,
        },
        slidesPerView: 1,
        spaceBetween: 10,
      });

      swiperInstances.push(swiper);
    });
  };

  // Button click handlers
  buttons.forEach(btn => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      buttons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      renderProjects(btn.dataset.type);
    });
  });

  // Initial load
  renderProjects("complete");
});