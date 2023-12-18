require('./bootstrap');

let sectionItems = document.querySelectorAll('.section-item');
for (let i = 0; i < sectionItems.length; i++) {
    let sectionItemArrow = sectionItems[i].querySelector('.section-arrow');
    if (sectionItemArrow) {
        sectionItemArrow.addEventListener('click', () => {
            sectionItems[i].classList.toggle('active');
        })
    }
}

let toCartBtn = document.querySelector('.detail-add-to-cart')
toCartBtn.addEventListener('click', e => {
    let url = e.target.dataset.url;
    let id = e.target.dataset.id;
    let count = 1;
    url = `${url}?id=${id}&count=${count}`;
    fetch(url).then(resp => resp.json()).then(json => {
        window.updateCart(json)
    })
})
