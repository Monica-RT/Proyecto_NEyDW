const openCloseButton = document.querySelector('#buttonOpenCloseMenu');

const menuMobileItems = document.querySelector('#menu-mobile-items');
openCloseButton.addEventListener('click', e =>{
    menuMobileItems.classList.toggle('menu-mobile-closed')
})     