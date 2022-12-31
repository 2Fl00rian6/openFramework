const navMenu = document.getElementById('nav-menu');
const mobileMenu = document.getElementById('mobile-menu');
navMenu.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});