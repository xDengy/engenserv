require('./bootstrap');

let pluses = document.querySelectorAll('.counter-plus');
for (let i = 0; i < pluses.length; i++) {
    let parent = pluses[i].parentNode;
    pluses[i].addEventListener('click', () => {
        changeQuantity(parent, false);
    })
}
let minuses = document.querySelectorAll('.counter-minus');
for (let i = 0; i < minuses.length; i++) {
    let parent = pluses[i].parentNode;
    minuses[i].addEventListener('click', () => {
        changeQuantity(parent);
    })
}

function changeQuantity(parent, minus = true) {
    let counter = parent.querySelector('.counter-value');
    let changeQuantityRes;
    if (minus) {
        changeQuantityRes = parseInt(counter.textContent) - 1;
        if (parseInt(counter.textContent) <= 1) {
            return;
        }
    } else {
        changeQuantityRes = parseInt(counter.textContent) + 1;
    }
    counter.textContent = changeQuantityRes;

    let url = parent.dataset.url;
    let id = parent.dataset.id;
    let count = parseInt(counter.textContent);
    url = `${url}?id=${id}&count=${count}`;
    fetch(url).then(resp => resp.json()).then(json => {
        window.updateCart(json, true)
        let totalCount = document.querySelector('.count-info .info-value');
        totalCount.textContent = json.count;
        let totalPrice = document.querySelector('.price-info .info-value');
        totalPrice.textContent = json.total + ' ₽';
        let itemPrice = parent.parentNode.querySelector('.cart-price');
        itemPrice.textContent = (json.price * json.quantity) + ' ₽';
    })
}
