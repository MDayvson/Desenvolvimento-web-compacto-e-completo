// DESATIVAR A FUNÇÃO NATIVA DE UM LINK
document.querySelector('a').addEventListener('click', (e) => {
    e.preventDefault();
})

// DESATIVAR A SUBMISSÃO DO FORMULÁRIO
document.querySelector('input[type=submit]').addEventListener('click', (e) => {

    // validação do formulario

    console.log(e)
    e.stopPropagation()
    e.preventDefault()
})

// CUIDADO COM A PROPAGAÇÃO!
document.querySelector('.caixa').addEventListener('click', (e) => {
    console.log('DIV')
})