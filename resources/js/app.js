import './bootstrap';

//Responsive navbar
const menu = document.querySelector('.ri-menu-4-line');
const nav = document.querySelector('.nav__items');
menu.addEventListener('click',()=>{
    nav.style.display= 'flex';
})