require('./bootstrap');

let detailOtherItems = document.querySelectorAll('.other-item');
for (let i = 0; i < detailOtherItems.length; i++) {
    let otherBtns = detailOtherItems[i].querySelectorAll('.other-show-btn, .other-title');
    for (let j = 0; j < otherBtns.length; j++) {
        otherBtns[j].addEventListener('click', () => {
            detailOtherItems[i].classList.toggle('active');
        })
    }
}

var swiper = new Swiper(".min-swiper", {
    slidesPerView: 6,
    spaceBetween: 8,
    loop: false,
    speed: 400,
    allowTouchMove: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".max-swiper", {
    loop: true,
    speed: 400,
    allowTouchMove: true,
    autoHeight: true,
    thumbs: {
        swiper: swiper,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

let toCartBtn = document.querySelector('.detail-add-to-cart');
toCartBtn.addEventListener('click', e => {
    let url = e.target.dataset.url;
    let id = e.target.dataset.id;
    let count = 1;
    url = `${url}?id=${id}&count=${count}`;
    toCartBtn.textContent = 'Добавить ещё';
    window.addProductToCart(url);
})
