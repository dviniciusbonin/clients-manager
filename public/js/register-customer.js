
const form = document.getElementById('register-customer');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(form);

    fetch(form.getAttribute('action'), {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error('Ocorreu um erro durante a requisição.');
        }
    })
    .then(resposta => {
        let modal = document.getElementById('registerCustomer');

        $(modal).modal('hide');
        location.reload();
    })
    .catch(error => {
       alert('Houve um erro. Contate o desenvolvedor.')
    });
});
