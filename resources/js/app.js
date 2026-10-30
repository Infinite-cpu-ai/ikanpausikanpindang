const menu = document.querySelector('[data-menu]');
const menuToggle = document.querySelector('[data-menu-toggle]');
const menuLinks = document.querySelectorAll('[data-menu-link]');

if (menu instanceof HTMLElement && menuToggle instanceof HTMLButtonElement) {
    const closeMenu = () => {
        menu.classList.add('hidden');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.setAttribute('aria-label', 'Buka menu');
    };

    menuToggle.addEventListener('click', () => {
        const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

        menu.classList.toggle('hidden', isOpen);
        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Buka menu' : 'Tutup menu');
    });

    menuLinks.forEach((link) => {
        link.addEventListener('click', closeMenu);
    });
}
