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
    const sectionTop = current.offsetTop - 200;
    var sectionId = current.getAttribute("id");
    const skillNumbrs= document.querySelectorAll(".skills__number");
    const skillBars = document.querySelectorAll(".skills__bar");
    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active");
      if (sectionId == "skills") {

        for (let i = 0; i < skillBars.length; i++) {

          var per = skillNumbrs[i].textContent;
          var nameclass = "s" + i.toString() + "after";
          var s5AfterCss = "." + nameclass + " { width: " + per + "; }";
          var styleElement = document.createElement("style");

          styleElement.textContent = s5AfterCss;
          document.body.appendChild(styleElement);
          skillBars[i].classList.add(nameclass);
        }
      } else {
        // skillBars.forEach((skillBar) => {
        //   skillBar.classList.remove("transition");
        // });
        for (let i = 0; i < skillBars.length; i++) {

          var s5AfterCss = "." + nameclass + " { width: 0%; }";
          var styleElement = document.createElement("style");

          styleElement.textContent = s5AfterCss;
          document.body.appendChild(styleElement);
          skillBars[i].classList.add(nameclass);
        }
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
