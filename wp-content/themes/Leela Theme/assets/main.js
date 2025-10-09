document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".projects-container button");
  const grid = document.querySelector("#leela-brands .services-grid");
  const allProjects = projectData.allProjects;
  const siteUrl = projectData.siteUrl;

  const renderProjects = (type) => {
    if (!allProjects[type]) return;
    grid.innerHTML = "";

    allProjects[type].forEach((p) => {
      const img1 = p.icons && p.icons.length > 0 ? `${siteUrl}${p.icons[0]}` : `${siteUrl}/wp-content/uploads/default.jpg`;
      const img2 = p.icons && p.icons.length > 1 ? `${siteUrl}${p.icons[1]}` : img1;

      grid.innerHTML += `
        <div class="col-lg-4 col-md-6 d-flex justify-content-center">
          <div class="service-card h-100 w-100 position-relative overflow-hidden border rounded shadow-sm" data-tilt>
            <div class="position-relative w-100 mb-3" style="height:200px; overflow:hidden;">
              <img 
                src="${img1}" 
                alt="${p.title}" 
                class="img-fluid w-100 h-100 position-absolute top-0 start-0" 
                style="object-fit:cover; transition:opacity 0.4s ease-in-out; z-index:1;"
              >
              <img 
                src="${img2}" 
                alt="${p.title}" 
                class="img-fluid w-100 h-100 position-absolute top-0 start-0" 
                style="object-fit:cover; opacity:0; transition:opacity 0.4s ease-in-out; z-index:2;"
              >
            </div>
            <div class="text-center p-3">
              <h2 class="fs-5 fw-bold mb-2">${p.title}</h2>
              <p class="mb-3 text-muted">${p.description}</p>
              <a href="${p.button_link}" target="_blank" class="btn btn-success">${p.button_text}</a>
            </div>
          </div>
        </div>
      `;
    });

    // Handle hover swap logic
    const cards = grid.querySelectorAll(".service-card");
    cards.forEach((card) => {
      const imgs = card.querySelectorAll("img");
      if (imgs.length < 2) return;

      card.addEventListener("mouseenter", () => {
        imgs[0].style.opacity = "0";
        imgs[1].style.opacity = "1";
      });

      card.addEventListener("mouseleave", () => {
        imgs[0].style.opacity = "1";
        imgs[1].style.opacity = "0";
      });
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

  // Initial load
  renderProjects("complete");
  document.querySelector('[data-type="complete"]').classList.add("active");
});
