require('./bootstrap');

let sortBlock = document.querySelector('.sort-block');
sortBlock.addEventListener('click', () => {
    sortBlock.classList.toggle('active');
})

let toCartBtn = document.querySelector('.detail-add-to-cart')
toCartBtn.addEventListener('click', e => {
    let url = e.target.dataset.url;
    let id = e.target.dataset.id;
    let count = 1;
    url = `${url}?id=${id}&count=${count}`;
    window.addProductToCart(url);
})
