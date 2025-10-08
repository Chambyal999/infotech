document.addEventListener("DOMContentLoaded", function() {
  const buttons = document.querySelectorAll(".projects-container a");
  const mainContainer = document.querySelector("#leela-brands .services-grid");

  // ✅ Access the data passed from PHP
  const complete_projects = leelaData.complete;
  const recent_projects = leelaData.recent;
  const upcoming_projects = leelaData.upcoming;
  const homeUrl = leelaData.homeUrl;

  function renderProjects(projects) {
    mainContainer.innerHTML = "";
    projects.forEach((project, index) => {
      const col = document.createElement("div");
      col.className = `col-lg-4 col-md-6 d-flex justify-content-center ${index > 0 ? 'd-none d-md-block' : ''}`;
      col.innerHTML = `
        <div class="service-card h-100 w-100" data-tilt>
          <div class="text-center mb-3">
            <img src="${homeUrl}${project.icon}" alt="${project.title} Icon" class="services-logo" style="width:80px; height:80px; object-fit:cover;">
          </div>
          <h2>${project.title}</h2>
          <p>${project.description}</p>
          <a href="${project.button_link}" class="btn btn-success" target="_blank">${project.button_text}</a>
        </div>
      `;
      mainContainer.appendChild(col);
    });
  }

  if (buttons.length) {
    buttons[0].addEventListener("click", function(e) {
      e.preventDefault();
      renderProjects(complete_projects);
    });

    buttons[1].addEventListener("click", function(e) {
      e.preventDefault();
      renderProjects(recent_projects);
    });

    buttons[2].addEventListener("click", function(e) {
      e.preventDefault();
      renderProjects(upcoming_projects);
    });
  }
});
