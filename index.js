const form = document.getElementById("form");
const nome = document.getElementById("nome");
const email = document.getElementById("email");
const telefone = document.getElementById("telefone");
const assunto = document.getElementById("assunto");
const mensagem = document.getElementById("mensagem");


form.addEventListener("submit", (e) => {

    let formularioValido = true; 

    if (!nome.value.trim()) {
        e.preventDefault();
        erroDeValidacao(nome, "Preencha o nome");
        formularioValido = false; 
    } else {
        sucessoNaValidacao(nome);
    }

    if (!email.value.trim()) {
        e.preventDefault();
        erroDeValidacao(email, "Preencha o email");
        formularioValido = false;
    } else {
        sucessoNaValidacao(email);
    }

    if (!telefone.value.trim()) {
        e.preventDefault();
        erroDeValidacao(telefone, "Preencha o telefone");
        formularioValido = false;
    } else {
        sucessoNaValidacao(telefone);
    }

    if (!assunto.value.trim()) {
        e.preventDefault();
        erroDeValidacao(assunto, "Preencha o assunto");
        formularioValido = false;
    } else {
        sucessoNaValidacao(assunto);
    }

    if (!mensagem.value.trim()) {
        e.preventDefault();
        erroDeValidacao(mensagem, "Preencha a mensagem");
        formularioValido = false;
    } else {
        sucessoNaValidacao(mensagem);
    }
    

});


function erroDeValidacao(input, messagemDeErro)
{
    const fildesetWrapper = input.parentElement;
    const small = fildesetWrapper.querySelector("small");

    small.innerText = messagemDeErro;

    fildesetWrapper.className = "fieldset-wrapper erro"
}

function sucessoNaValidacao(input)
{
    const fildesetWrapper = input.parentElement;
    fildesetWrapper.className = "fieldset-wrapper sucesso"
}