// DEFINIR UM EVENT LISTENER

// -------------------------------------------------------
// function evento(){
//     document.querySelector("h1").textContent = "Novo texto"
// }

// let botao = document.querySelector("button")
// botao.addEventListener('click', evento)

// -------------------------------------------------------
// let botao = document.querySelector("button")
// botao.addEventListener('click', function() {
//     console.log('clique')
// })

// -------------------------------------------------------
// let botao = document.querySelector("button")
// botao.addEventListener('click', () => console.log('clique'))

// -------------------------------------------------------
document.querySelector("button").addEventListener('click', (e) => {
    console.log('clique')
    e.target.textContent = "Alterado"
    document.querySelector("h1").textContent = "Texto alterado"

    let novo_elemento = document.createElement('p')
    novo_elemento.innerText = 'Texto do parágrafo'

// adicionar ao body
    document.body.appendChild(novo_elemento)
})