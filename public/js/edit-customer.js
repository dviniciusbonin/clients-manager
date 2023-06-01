let modal = document.getElementById("editCustomer");

function getCustomer(id) {
  return fetch(`/clientes/${id}`)
    .then((response) => response.json())
    .then((data) => {
      return data;
    })
    .catch((error) => {
      console.error("Ocorreu um erro:", error);
    });
}

async function editCustomer(id) {
  const customer = await getCustomer(id);

    const inputUserId = document.querySelector('#edit-customer input#user-id')
   const inputName = document.querySelector('#edit-customer input#name')
   const inputEmail = document.querySelector('#edit-customer input#email')
   const inputPhone = document.querySelector('#edit-customer input#phone')
   const inputStreet = document.querySelector('#edit-customer input#rua')
   const inputCep = document.querySelector('#edit-customer input#cep')
   const inputNeighborhood = document.querySelector('#edit-customer input#bairro')
   const inputCity = document.querySelector('#edit-customer input#cidade')
   const inputUf = document.querySelector('#edit-customer input#uf')


  inputUserId.value = id
   inputName.value = customer.name
   inputEmail.value = customer.email
   inputPhone.value = customer.phone
   inputCep.value = customer.address.cep
   inputStreet.value = customer.address.street
   inputNeighborhood.value = customer.address.neighborhood
   inputCity.value = customer.address.city
   inputUf.value = customer.address.uf

   $(modal).modal("show");
}

const editCustomerform = document.getElementById("edit-customer");
editCustomerform.addEventListener("submit", function (event) {
  event.preventDefault();
  console.log('vou fazer a request')
  const formData = new FormData(editCustomerform);
  console.log(formData)

  fetch(editCustomerform.getAttribute("action"), {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (response.ok) {
        return response.text();
      } else {
        throw new Error("Ocorreu um erro durante a requisição.");
      }
    })
    .then((resposta) => {
      $(modal).modal("hide");
      location.reload();
    })
    .catch((error) => {
      alert("Houve um erro. Contate o desenvolvedor.");
    });
});