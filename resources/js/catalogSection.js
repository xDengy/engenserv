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

let showSections = document.querySelector('.catalog-section-open-wrapper');
let sections = document.querySelector('.catalog-sections');
showSections.addEventListener('click', () => {
    sections.classList.toggle('active');
    showSections.classList.toggle('active');
})
