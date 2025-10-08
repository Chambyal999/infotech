document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".projects-container button");
  const grid = document.querySelector("#leela-brands .services-grid");
  const allProjects = projectData && projectData.allProjects ? projectData.allProjects : {};
  const siteUrl = (projectData && projectData.siteUrl) ? projectData.siteUrl.replace(/\/$/, '') : '';

  let activeSwipers = [];
  let swiperCounter = 0;

  const normalizeUrl = (u) => {
    if (!u) return null;
    if (/^(https?:)?\/\//i.test(u)) return u; // absolute or protocol-relative
    if (u.startsWith('/')) return siteUrl + u;
    return siteUrl + '/' + u;
  };

  const gatherImages = (p) => {
    if (!p) return [];
    // Prefer an 'icons' array if provided
    if (Array.isArray(p.icons) && p.icons.length) return p.icons.map(normalizeUrl).filter(Boolean);
    // Fallback to common individual fields (handles icon, icon-2, icon2, icon_2)
    const candidates = [];
    if (p.icon) candidates.push(p.icon);
    if (p['icon-2']) candidates.push(p['icon-2']);
    if (p.icon2) candidates.push(p.icon2);
    if (p['icon_2']) candidates.push(p['icon_2']);
    return candidates.filter(Boolean).map(normalizeUrl);
  };

  const destroySwipers = () => {
    activeSwipers.forEach((s) => {
      try { s.destroy(true, true); } catch (e) { /* ignore */ }
    });
    activeSwipers = [];
  };

  const renderProjects = (type) => {
    if (!allProjects[type]) return;
    destroySwipers();
    grid.innerHTML = "";

    allProjects[type].forEach((p, idx) => {
      const images = gatherImages(p);
      const slidesHtml = (images.length ? images : [null]).map((img) => {
        const src = img || normalizeUrl(p.icon || p['icon-2'] || p.icon2 || '');
        return `
          <div class="swiper-slide d-flex justify-content-center">
            <img src="${src || ''}" alt="${(p.title||'')}" class="services-logo"
                 style="width:80px;height:80px;object-fit:cover;">
          </div>
        `;
      }).join("");

      const unique = `mySwiper-${swiperCounter++}-${idx}`;

      grid.innerHTML += `
        <div class="col-lg-4 col-md-6 d-flex justify-content-center">
          <div class="service-card h-100 w-100" data-tilt>
            <div class="text-center mb-3">
              <div class="swiper ${unique}">
                <div class="swiper-wrapper">
                  ${slidesHtml}
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>
            </div>
            <h2>${p.title || ''}</h2>
            <p>${p.description || ''}</p>
            <a href="${p.button_link || '#'}" class="btn btn-success" target="_blank">${p.button_text || 'Visit'}</a>
          </div>
        </div>
      `;
    });

    if (typeof Swiper === 'undefined') {
      console.error('Swiper is not loaded. Make sure you enqueued Swiper JS before main.js.');
      return;
    }

    // initialize Swiper for every card (pagination/navigation scoped to container)
    const swiperContainers = grid.querySelectorAll('.swiper');
    swiperContainers.forEach((containerEl) => {
      const paginationEl = containerEl.querySelector('.swiper-pagination');
      const nextEl = containerEl.querySelector('.swiper-button-next');
      const prevEl = containerEl.querySelector('.swiper-button-prev');

      const swiper = new Swiper(containerEl, {
        loop: true,
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 30,
        autoplay: { delay: 2500, disableOnInteraction: false },
        pagination: { el: paginationEl, clickable: true },
        navigation: { nextEl, prevEl },
      });

      activeSwipers.push(swiper);
    });
  };

  // Button click handler
  buttons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      buttons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      renderProjects(btn.dataset.type);
    });
  });

  // Initial load — set the 'complete' button active (if present)
  const initialBtn = document.querySelector('.projects-container button[data-type="complete"]') || buttons[0];
  if (initialBtn) {
    initialBtn.classList.add('active');
    renderProjects(initialBtn.dataset.type || 'complete');
  } else {
    renderProjects('complete');
  }
});
