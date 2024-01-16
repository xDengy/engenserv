require('./bootstrap');

let shadow = document.querySelector('.form-success .shadow');
let close = document.querySelector('.form-success .success-close');

shadow.addEventListener('click', () => {
    document.body.classList.remove('show-form');
})
close.addEventListener('click', () => {
    document.body.classList.remove('show-form');
})
