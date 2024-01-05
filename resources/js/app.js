require('./bootstrap');

window.updateCart = function (cart) {
    let cartEl = document.querySelector('header .cart')

    if (cart.count) {
        cartEl.classList.add('active')
        cartEl.querySelector('.counter').innerText = cart.count
    } else {
        cartEl.classList.remove('active')
        cartEl.querySelector('.counter').innerText = 0
    }
}

let backBtn = document.querySelector('.error-btn-back');
if (backBtn) {
    backBtn.addEventListener('click', () => {
        history.back();
    })
}
