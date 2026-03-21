const menuContainer = document.querySelector('.compact-menu-container');

setInterval(() => {
    menuContainer.classList.toggle('visible', window.scrollY > 105);
}, 100);

const compactMenuToggle = document.querySelector('.menu-toggle');

compactMenuToggle.addEventListener('click', () => {
    menuContainer.classList.toggle('active');
});