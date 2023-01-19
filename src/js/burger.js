let buttom = document.querySelector('#menu')
buttom.addEventListener('click', function (){

    let menu = document.querySelector('.ul-nav1');
    let menu2 = document.querySelector('.ul-nav2');

    menu.classList.toggle('menumobile');
    menu2.classList.toggle('menumobile');

})