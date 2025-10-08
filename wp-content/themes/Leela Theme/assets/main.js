document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".projects-container button");
  const grid = document.querySelector("#leela-brands .services-grid");
  const allProjects = (window.projectData && projectData.allProjects) ? projectData.allProjects : {};
  const siteUrl = (window.projectData && projectData.siteUrl) ? projectData.siteUrl.replace(/\/$/, '') : '';

  const normalizeUrl = (u) => {
    if (!u) return null;
    if (/^(https?:)?\/\//i.test(u)) return u;
    if (u.startsWith('/')) return siteUrl + u;
    return siteUrl + '/' + u;
  };

  const gatherImages = (p) => {
    if (!p) return [];
    if (Array.isArray(p.icons) && p.icons.length) return p.icons.map(normalizeUrl).filter(Boolean);
    return [];
  };

  const renderProjects = (type) => {
    if (!allProjects[type]) return;
    grid.innerHTML = "";

    allProjects[type].forEach((p, idx) => {
      const images = gatherImages(p);
      const slidesHtml = (images.length ? images : ['']).map((img) => {
        const src = img || '';
        return `
          <swiper-slide>
            <div class="d-flex justify-content-center">
              <img src="${src}" alt="${p.title || ''}" class="services-logo"
                   style="width:80px;height:80px;object-fit:cover;">
            </div>
          </swiper-slide>
        `;
      }).join("");

      grid.innerHTML += `
        <div class="col-lg-4 col-md-6 d-flex justify-content-center">
          <div class="service-card h-100 w-100" data-tilt>
            <div class="text-center mb-3">
              <swiper-container
                class="mySwiper"
                slides-per-view="1"
                centered-slides="true"
                space-between="30"
                autoplay-delay="2500"
                autoplay-disable-on-interaction="false"
                autoplay-pause-on-mouse-enter="true"
                loop="true"
                pagination="true"
                navigation="true"
              >
                ${slidesHtml}
              </swiper-container>
            </div>
            <h2>${p.title || ''}</h2>
            <p>${p.description || ''}</p>
            <a href="${p.button_link || '#'}" class="btn btn-success" target="_blank">${p.button_text || 'Visit'}</a>
          </div>
        </div>
      `;
    });
  };

  buttons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      buttons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      renderProjects(btn.dataset.type);
    });
  });

  // Initial load
  const initialBtn = document.querySelector('.projects-container button[data-type="complete"]') || buttons[0];
  if (initialBtn) {
    initialBtn.classList.add('active');
    renderProjects(initialBtn.dataset.type || 'complete');
  } else {
    renderProjects('complete');
  }
});
