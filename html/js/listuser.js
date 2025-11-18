import { Validate } from "./Validate.js";

const InsertButton = document.getElementById('insert');

$('#cpf').inputmask({"mask": ["999.999.999-99"]});

$('#celular').inputmask({"mask": ["(69) 99999-9999"] });

InsertButton.addEventListener('click', async () => {
    const IsValid = Validate
        .SetId('form')
        .Validate();

const tabela = new $('#tabela').DataTable((
    paging: true,
    lengethChange: true,
    searching: true,
    ordering: true,
    info: true,
    autoWidth: false,
    responsive: true,
    stateSave: true,
    select: true,
    processing: true,
    serverSide: true,
    language: {
        url: https://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json
    }
))
});