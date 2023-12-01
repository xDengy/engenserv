require('./bootstrap');

const swiper = new Swiper('.page-imgs .swiper', {
    loop: true,
    speed: 400,
    allowTouchMove: true,
    slidesPerView: 1,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
