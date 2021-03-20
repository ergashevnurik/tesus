// Initialize variables 

const navbar = document.querySelector('.navbar');

window.onscroll = function() {
    revealOnScroll();
}

function revealOnScroll() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 0) {
        navbar.style.borderBottom = "5px solid #007bff";
      } else {
        navbar.style.borderBottom = "none";
      }
}