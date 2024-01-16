require('./bootstrap');

let form = document.querySelector('.offer-page form');
let error = form.querySelector('.error');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    let formData = new FormData(form);
    $.ajax({
        url: form.getAttribute('action'),
        method: 'POST',
        contentType: false,
        processData: false,
        data: formData,
        success: function(data){
            if (data.status === 'success') {
                error.classList.remove('show');
                document.body.classList.add('show-form');

                let shadow = document.querySelector('.form-success .shadow');
                let close = document.querySelector('.form-success .success-close');

                shadow.addEventListener('click', () => {
                    window.location.href = '/cart';
                })
                close.addEventListener('click', () => {
                    window.location.href = '/cart';
                })
            } else {
                error.classList.add('show');
            }
        }
    });
})
