// Selecionar elementos do DOM
const hamburgerMenu = document.querySelector('.nav-links');
const navbarNav = document.querySelector('.links-header');

// Adicionar evento de clique no ícone do hamburger
hamburgerMenu.addEventListener('click', () => {
  navbarNav.classList.toggle('active');
});