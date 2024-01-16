require('./bootstrap');

let cartAddPopup = document.querySelector('.cart-add-popup');
window.addEventListener('scroll', () => {
    if (cartAddPopup && cartAddPopup.classList.contains('available')) {
        if (window.scrollY > 0) {
            cartAddPopup.classList.remove('show');
            cartAddPopup.classList.add('show-mini');
        } else {
            cartAddPopup.classList.add('show');
            cartAddPopup.classList.remove('show-mini');
        }
    }
})

window.addProductToCart = function (url) {
    fetch(url).then(resp => resp.json()).then(json => {
        window.updateCart(json);
        cartAddPopup.classList.add('available', 'show');
        setTimeout(() => {
            cartAddPopup.classList.remove('show', 'show-mini', 'available');
        }, 1500);

        if (window.scrollY > 0) {
            cartAddPopup.classList.remove('show');
            cartAddPopup.classList.add('show-mini');
        }
    })
}
