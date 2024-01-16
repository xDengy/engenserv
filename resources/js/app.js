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

let backBtns = document.querySelectorAll('[data-btn="back"]');
for (let i = 0; i < backBtns.length; i++) {
    let backBtn = backBtns[i];
    backBtn.addEventListener('click', () => {
        history.back();
    })
}
