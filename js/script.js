const hamburgerMenu = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.links-header');
const navsLinks = document.querySelector('.nav-links');

hamburgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('show');
});