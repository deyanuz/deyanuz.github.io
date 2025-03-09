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


const themeButton = document.getElementById('toggle__icon')
const darkTheme = 'dark-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the dark-theme class
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the dark
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'bx bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the dark / icon theme
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})
