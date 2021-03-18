// Initialize variables 

const navbar = document.querySelector('.navbar');

window.onscroll = function() {
    revealOnScroll();
}

function revealOnScroll() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop < 100) {
        navbar.style.padding = "0";
        navbar.style.borderBottom = "2px solid #fff";
      } else {
        navbar.style.padding = "5px";
        navbar.style.borderBottom = "2px solid #007bff";
      }
}