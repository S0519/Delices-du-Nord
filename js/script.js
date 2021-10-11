const navToggle = document.querySelector(".nav-toggle");
const navToggleLines = document.querySelectorAll(".nav-toggle .line");
const menuDrawer = document.querySelector(".menu-drawer");
const navWrapper = document.querySelector(".nav-wrapper");
const navLinksColor = document.querySelectorAll(".nav-wrapper a");
navToggle.addEventListener("click", toggleDrawer);

function toggleDrawer() {
  navToggle.classList.toggle("open");
  menuDrawer.classList.toggle("show");
  if (navToggle.classList.contains("open")) {
    // navWrapper.style.background = "white";
    navLinksColor.forEach((link) => {
      link.style.color = "black";
    });
    navToggleLines.forEach((line, index) => {
      if (index === 1) {
        line.style.background = "transparent";
      } else {
        line.style.background = "white";
      }
    });
  } else {
    // navWrapper.style.background = "transparent";
    navLinksColor.forEach((link) => {
      link.style.color = "white";
    });
    setTimeout(() => {
      navToggleLines.forEach((line, index) => {
        line.style.background = "white";
      });
    }, 500);
  }
}
