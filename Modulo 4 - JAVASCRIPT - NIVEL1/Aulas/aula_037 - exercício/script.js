/* 
OBJETIVO:
Ao clicar no botão, alterar a cor de fundo da caixa para aquamarine,
apresentar o texto 'clique' na consola e
remover o evento click do botão
*/

let caixa = document.querySelector(".caixa")
let botão = document.querySelector("button")

function executar(e) {
    caixa.classList.add("cor-fundo-caixa")
    console.log("clique") 
    botão.removeEventListener("click", executar)
    e.target.textContent = "Executado"
}

botão.addEventListener("click", executar)

