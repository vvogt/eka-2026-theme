const menuButton = document.querySelector('.menu-toggle');

setInterval(() => {
    menuButton.classList.toggle('visible', window.scrollY > 105);
}, 100);