// Initialize variables 

const navbar = document.querySelector('.navbar');

window.onscroll = function() {
    revealOnScroll();
}

function revealOnScroll() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 0) {
        navbar.style.padding = "5px";
        navbar.style.borderBottom = "3px solid #007bff";
      } else {
        navbar.style.padding = "0";
        navbar.style.borderBottom = "none";
      }
}