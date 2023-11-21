require('./bootstrap');

const swiper = new Swiper('.advantages .swiper', {
    loop: true,
    speed: 400,
    allowTouchMove: true,
    autoHeight: true,
    slidesPerView: 3,
    spaceBetween: 10,
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        768: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    }
});
