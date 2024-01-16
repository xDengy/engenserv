require('./bootstrap');

let form = document.querySelector('.partnership form');
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
            } else {
                error.classList.add('show');
            }
        }
    });
})
