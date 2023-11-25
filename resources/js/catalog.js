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

let sortBlock = document.querySelector('.sort-block');
sortBlock.addEventListener('click', () => {
    sortBlock.classList.toggle('active');
})
