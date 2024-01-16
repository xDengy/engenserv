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
let deleteBtns = document.querySelectorAll('.cart-delete');
for (let i = 0; i < deleteBtns.length; i++) {
    deleteBtns[i].addEventListener('click', () => {
        let url = deleteBtns[i].dataset.url;
        let id = deleteBtns[i].dataset.id;
        url = `${url}?id=${id}`;
        fetch(url).then(resp => resp.json()).then(json => {
            window.updateCart(json, true);
        })
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
        totalPrice.textContent = number_format(json.total, 0, '', ' ') + ' ₽';
        let itemPrice = parent.parentNode.querySelector('.cart-price');
        itemPrice.textContent = number_format((json.price * json.quantity), 0, '', ' ') + ' ₽';
    })
}

function number_format(number, decimals, dec_point, thousands_point) {

    if (number == null || !isFinite(number)) {
        throw new TypeError("number is not valid");
    }

    if (!decimals) {
        var len = number.toString().split('.').length;
        decimals = len > 1 ? len : 0;
    }

    if (!dec_point) {
        dec_point = '.';
    }

    if (!thousands_point) {
        thousands_point = ',';
    }

    number = parseFloat(number).toFixed(decimals);

    number = number.replace(".", dec_point);

    var splitNum = number.split(dec_point);
    splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
    number = splitNum.join(dec_point);

    return number;
}
