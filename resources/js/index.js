require('./bootstrap');
const {SuperGif} = require("@wizpanda/super-gif");

let advSwiper = new Swiper('.advantages .swiper', {
    loop: true,
    speed: 400,
    allowTouchMove: true,
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

let newsMin = new Swiper('.news .swiper.min', {
    loop: true,
    speed: 400,
    allowTouchMove: true,
    slidesPerView: 4,
    spaceBetween: 15,
});

let newsSwiper = new Swiper('.news .swiper.max', {
    loop: true,
    speed: 400,
    allowTouchMove: true,
    slidesPerView: 1,
    spaceBetween: 15,
    thumbs: {
        swiper: newsMin,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

let images = document.querySelectorAll('.about-image');
for (let i = 0; i < images.length; i++) {
    let imgTag = images[i].querySelector('.gif');
    let gif = new SuperGif(imgTag, {
        autoPlay: false,
        drawWhileLoading: false,
        showProgressBar: false,
    });

    gif.load(function(){
        images[i].classList.add('loaded');
        // let scrollTop = 0;
        let allowMove = 0;
        let lastKnownScrollPosition = 0;

        let bodyRect = document.body.getBoundingClientRect();
        let offset = gif.canvas.getBoundingClientRect();
        let imgTopPos = offset.top - bodyRect.top;
        // let imgBotPos = imgTopPos + offset.height;

        document.addEventListener('scroll', (event) => {
            if ((imgTopPos - 500) < window.scrollY && window.scrollY > lastKnownScrollPosition) {
                // scrollTop = 0;
                allowMove = 1;
            // } else if (imgBotPos > window.scrollY && window.scrollY <= lastKnownScrollPosition) {
            //     scrollTop = 1;
            //     allowMove = 1;
            } else {
                allowMove = 0;
            }
            lastKnownScrollPosition = window.scrollY;

            if (allowMove) {
                // if (scrollTop) {
                    // if (parseInt(gif.currentFrameIndex) - 1 >= 0) {
                    //     gif.moveTo(parseInt(gif.currentFrameIndex) - 1);
                    // }
                // } else {
                    if (parseInt(gif.currentFrameIndex) + 1 < gif.frames.length) {
                        gif.moveTo(parseInt(gif.currentFrameIndex) + 1);
                    }
                // }
            }
        })
    });
}

let searchBtn = document.querySelector('.search svg');
searchBtn.addEventListener('click', () => {
    searchBtn.parentNode.classList.toggle('active');
})

let burgerMenu = document.querySelector('.burger-menu');
if (burgerMenu) {
    let burgerBtn = document.querySelector('.burger');
    if (burgerBtn) {
        burgerBtn.addEventListener('click', () => {
            burgerMenu.classList.add('active');
        })
    }

    let burgerMenuClose = document.querySelector('.burger-menu .burger-close');
    if (burgerMenuClose) {
        burgerMenuClose.addEventListener('click', () => {
            burgerMenu.classList.remove('active');
        })
    }
}
