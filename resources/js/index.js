require('./bootstrap');
const {SuperGif} = require("@wizpanda/super-gif");

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

let imgs = document.querySelectorAll('.gif');
for (let i = 0; i < imgs.length; i++) {
    let img_tag = imgs[i];
    if (/.*\.gif/.test(img_tag.src)) {
        console.log(img_tag);
        var rub = new SuperGif({ gif: img_tag }, []);
        rub.load(function(){
            console.log('oh hey, now the gif is loaded');
        });
    }
}
