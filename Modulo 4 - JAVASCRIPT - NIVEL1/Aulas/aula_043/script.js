// INTRODUÇÃO À VALIDAÇÃO DE FORMULÁRIOS

document.formulario_login.addEventListener('submit', (event) => {

    // buscar valores dos campos
    let usuario = event.target.usuario.value
    let senha = event.target.senha.value
    let submit = true


    // validar usuario
    if (usuario === "") {
        submit = false

        // erro
        let tmp = document.querySelector('input[name="usuario"]')
        tmp.insertAdjacentHTML("afterend", '<span class="error"> Usuário é obrigatorio </span>')
    }

    // validar a senha
    if (senha === "") {
        submit = false

        // erro
        let tmp = document.querySelector('input[name="senha"]')
        tmp.insertAdjacentHTML("afterend", '<span class="error"> Senha é obrigatorio </span>')

    }

    // verificar se o formulario pode ser submetido
    if (!submit) {
        event.preventDefault()

        setTimeout((e) => {
            document.querySelectorAll(".error").forEach(e => e.remove())
        }, 2000);
    }

})