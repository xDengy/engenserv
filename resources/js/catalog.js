require('./bootstrap');

let sortBlock = document.querySelector('.sort-block');
sortBlock.addEventListener('click', () => {
    sortBlock.classList.toggle('active');
})
