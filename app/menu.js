// Seleção de elementos do DOM
const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');
const menuIcon = document.querySelector('.menu-icon');
const dropdowns = document.querySelectorAll('.dropdown');

// Alternar visibilidade do menu e alterar o ícone
hamburger.addEventListener('click', () => {
    const isMenuVisible = menu.style.display === 'block';
    menu.style.display = isMenuVisible ? 'none' : 'block';
    
    menuIcon.setAttribute('src', isMenuVisible ? '/images/circle-plus.svg' : '/images/circle-x.svg');
});

// Exibir/ocultar dropdowns no mobile e alterar ícone correspondente
dropdowns.forEach(dropdown => {
    const dropdownIcon = dropdown.querySelector('.dropdown-icon');
    const submenu = dropdown.querySelector('.submenu');

    dropdown.addEventListener('click', () => {
        const isVisible = submenu.style.display === 'block';
        submenu.style.display = isVisible ? 'none' : 'block';

        dropdownIcon.setAttribute('src', isVisible ? '/images/caret-down.svg' : '/images/caret-up.svg');
    });
});

