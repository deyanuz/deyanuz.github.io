const navMenu = document.getElementById("nav-menu"),
  toggleMenu = document.getElementById("nav-toggle"),
  closeMenu = document.getElementById("nav-close");

toggleMenu.addEventListener("click", () => {
  navMenu.classList.toggle("show");

  var navItems = document.querySelectorAll(".nav__item");
  var delay = 100;

  navItems.forEach(function (item, index) {
    setTimeout(function () {
      item.classList.add("activate");
    }, index * delay);
  });
});
closeMenu.addEventListener("click", () => {
  navMenu.classList.remove("show");
  var navItems = document.querySelectorAll(".nav__item");
  navItems.forEach(function (item) {
    item.classList.remove("activate");
  });
});
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  navMenu.classList.remove("show");
}
navLink.forEach((n) => n.addEventListener("click", linkAction));

const sections = document.querySelectorAll("section[id]");
window.addEventListener("scroll", scrollActive);

function scrollActive() {
  const scrollY = window.scrollY;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    var sectionId = current.getAttribute("id");
    const skillBars = document.querySelectorAll(".skills__bar");
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active");
      if (sectionId == "skills") {
        skillBars.forEach((skillBar) => {
          skillBar.classList.add("transition");
        });
      } else {
        skillBars.forEach((skillBar) => {
          skillBar.classList.remove("transition");
        });
      }
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active");
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  var navItems = document.querySelectorAll(".nav__item");
  var delay = 100;

  navItems.forEach(function (item, index) {
    setTimeout(function () {
      item.classList.add("active");
    }, index * delay);
  });
});
