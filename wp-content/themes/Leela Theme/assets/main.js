document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".projects-container button");
  const grid = document.querySelector("#leela-brands .services-grid");
  const allProjects = projectData.allProjects;
  const siteUrl = projectData.siteUrl;

  const renderProjects = (type) => {
    if (!allProjects[type]) return;

    grid.innerHTML = "";
    allProjects[type].forEach((p) => {
      grid.innerHTML += `
        <div class="col-lg-4 col-md-6 d-flex justify-content-center">
          <div class="service-card h-100 w-100" data-tilt>
            <div class="text-center mb-3">
              <img src="${siteUrl}${p.icon}" alt="${p.title}" class="services-logo" style="width:80px;height:80px;object-fit:cover;">
            </div>
            <h2>${p.title}</h2>
            <p>${p.description}</p>
            <a href="${p.button_link}" class="btn btn-success" target="_blank">${p.button_text}</a>
          </div>
        </div>
      `;
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
});
