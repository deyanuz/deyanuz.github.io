const inputs = document.querySelectorAll(".home-input");
const update = document.querySelector(".update-home");
inputs.forEach((input) => {
  input.addEventListener("input", () => {
    // Change color of the update link
    update.style.background = "#7380ec";
    update.style.color = "#ffff";
  });
});

document.querySelectorAll(".nav-menu").forEach((item) => {
  item.addEventListener("click", (event) => {
    const clickedId = item.querySelector("h3").textContent.toLocaleLowerCase();
    document.querySelectorAll(".nav-section").forEach((section) => {
      if (section.classList.contains(clickedId)) {
        section.classList.remove("not-visible");
      } else {
        section.classList.add("not-visible");
      }
    });
    document.querySelectorAll(".nav-menu").forEach((link) => {
      link.classList.remove("active");
    });
    item.classList.add("active");
  });
});

const inputAbout = document.querySelectorAll(".about-input");
const updateAbout = document.querySelector(".update-about");
inputAbout.forEach((input) => {
  input.addEventListener("input", () => {
    // Change color of the update link
    updateAbout.style.background = "#7380ec";
    updateAbout.style.color = "#ffff";
  });
});

function addEducationRow() {
  const addEducation = document.querySelector(".add-education");
  const removeEducation = document.querySelector(".remove-education");

  var tbody = document.querySelector(".education").querySelector("tbody");
  var newRow = document.createElement("tr");
  newRow.innerHTML = `
              <td class="center"><input class="center" type="text" value=""></td>
              <td class="center"><input class="center" type="text" value=""></td>
              <td class="center"><input class="center" type="text" value=""></td>
              <td class="center"><input class="center" type="text" value=""></td>
          `;
  tbody.appendChild(newRow);
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#7380ec";
    update.style.color = "#ffff";
  });
  addEducation.classList.add("not-visible");
  removeEducation.classList.remove("not-visible");
}
function removeEducationRow() {
  const addEducation = document.querySelector(".add-education");
  const removeEducation = document.querySelector(".remove-education");
  var tbody = document.querySelector(".education").querySelector("tbody");
  tbody.removeChild(tbody.lastElementChild);
  addEducation.classList.remove("not-visible");
  removeEducation.classList.add("not-visible");
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#cccccc";
    update.style.color = "#363949";
  });
}

function addBackendRow() {
  const addBackend = document.querySelector(".add-backend");
  const removeBackend = document.querySelector(".remove-backend");

  var tbody = document.querySelector(".backend").querySelector("tbody");
  var newRow = document.createElement("tr");
  newRow.innerHTML = `
                <td class="center"><input class="center" type="text" value=""></td>
                <td class="center"><input class="center" type="text" value=""></td>
            `;
  tbody.appendChild(newRow);
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#7380ec";
    update.style.color = "#ffff";
  });
  addBackend.classList.add("not-visible");
  removeBackend.classList.remove("not-visible");
}
function removeBackendRow() {
  const addBackend = document.querySelector(".add-backend");
  const removeBackend = document.querySelector(".remove-backend");
  var tbody = document.querySelector(".backend").querySelector("tbody");
  tbody.removeChild(tbody.lastElementChild);
  addBackend.classList.remove("not-visible");
  removeBackend.classList.add("not-visible");
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#cccccc";
    update.style.color = "#363949";
  });
}

function addFrontendRow() {
  const addFrontend = document.querySelector(".add-frontend");
  const removeFrontend = document.querySelector(".remove-frontend");

  var tbody = document.querySelector(".frontend").querySelector("tbody");
  var newRow = document.createElement("tr");
  newRow.innerHTML = `
                <td class="center"><input class="center" type="text" value=""></td>
                <td class="center"><input class="center" type="text" value=""></td>
            `;
  tbody.appendChild(newRow);
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#7380ec";
    update.style.color = "#ffff";
  });
  addFrontend.classList.add("not-visible");
  removeFrontend.classList.remove("not-visible");
}
function removeFrontendRow() {
  const addFrontend = document.querySelector(".add-frontend");
  const removeFrontend = document.querySelector(".remove-frontend");
  var tbody = document.querySelector(".frontend").querySelector("tbody");
  tbody.removeChild(tbody.lastElementChild);
  addFrontend.classList.remove("not-visible");
  removeFrontend.classList.add("not-visible");
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#cccccc";
    update.style.color = "#363949";
  });
}

function addWorksRow() {
  const addWorks = document.querySelector(".add-works");
  const removeWorks = document.querySelector(".remove-works");

  var tbody = document.querySelector(".works").querySelector("tbody");
  var newRow = document.createElement("tr");
  newRow.innerHTML = `
                <td class="center"><input class="center" type="text" value=""></td>
                <td class="center"><input class="center" type="text" value=""></td>
            `;
  tbody.appendChild(newRow);
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#7380ec";
    update.style.color = "#ffff";
  });
  addWorks.classList.add("not-visible");
  removeWorks.classList.remove("not-visible");
}
function removeWorksRow() {
  const addWorks = document.querySelector(".add-works");
  const removeWorks = document.querySelector(".remove-works");
  var tbody = document.querySelector(".works").querySelector("tbody");
  tbody.removeChild(tbody.lastElementChild);
  addWorks.classList.remove("not-visible");
  removeWorks.classList.add("not-visible");
  const updates = document.querySelectorAll(".update");
  updates.forEach((update) => {
    update.style.background = "#cccccc";
    update.style.color = "#363949";
  });
}
function loginPage() {
  window.location.href = "index.php";
}
function reloadPage() {
  // Reload the page
  location.reload();
}
