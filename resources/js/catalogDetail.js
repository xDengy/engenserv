require('./bootstrap');

let detailOtherItems = document.querySelectorAll('.other-item');
for (let i = 0; i < detailOtherItems.length; i++) {
    let showBtn = detailOtherItems[i].querySelector('.other-show-btn');
    let title = detailOtherItems[i].querySelector('.other-title');
    if (showBtn) {
        showBtn.addEventListener('click', () => {
            detailOtherItems[i].classList.toggle('active');
        })
    }
    if (title) {
        title.addEventListener('click', () => {
            detailOtherItems[i].classList.toggle('active');
        })
    }
}

var swiper = new Swiper(".min-swiper", {
    slidesPerView: 6,
    spaceBetween: 8,
    loop: true,
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
