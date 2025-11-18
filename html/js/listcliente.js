import { Requests } from "./Requests.js";

const Salvar = document.getElementById('salvar');
const Cep = document.getElementById('cep');

Salvar.addEventListener('click', async () => {
    const response = await Requests
        .SetForm('cadastro-cliente')
        .Post('/cliente/insert');
});

Cep.addEventListener('blur', async () => {
    const cep = Cep.value.replace('-', '');
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    const response = await Requests.Get(url);
    console.log(response);
});