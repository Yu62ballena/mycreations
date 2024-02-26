'use strict'

{
    const menu = document.getElementById('menu');
    const close = document.getElementById('close');
    const nav = document.querySelector('.hidden-nav');

    menu.addEventListener('click',() =>{
        nav.classList.remove('hidden');
        nav.classList.add('show');

        menu.classList.add('hidden');
        menu.classList.remove('menu');

        close.classList.remove('hidden');
        close.classList.add('show');
    });

    close.addEventListener('click',() =>{
        nav.classList.add('hidden');
        nav.classList.remove('show');

        menu.classList.remove('hidden');
        menu.classList.add('menu');

        close.classList.add('hidden');
        close.classList.remove('show');
    });




}