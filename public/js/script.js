
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}

function toggleDropdown(event) {
if (window.innerWidth <= 768) {
event.preventDefault();
const dropdown = event.target.closest('.dropdown');
if (dropdown) {
    dropdown.classList.toggle('active');
}
}
}
document.addEventListener('click', function(event) {
const header = document.querySelector('.header');
const menuBars = document.querySelector('.menu-bars');

if (!header.contains(event.target) && !menuBars.contains(event.target)) {
const navLinks = document.querySelector('.nav-links');
navLinks.classList.remove('active');
}
});