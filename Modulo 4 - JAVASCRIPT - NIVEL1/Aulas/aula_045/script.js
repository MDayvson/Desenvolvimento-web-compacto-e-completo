// este código vai ser executado antes dos elementos do body existire,

// Opção 1
document.addEventListener('readystatechange', (event) => {
    if (event.target.readyState === 'complete') {
        document.querySelector("button").addEventListener('click', () => {
            document.querySelector('h1').innerText = "Texto do título alterado"
        })
    }
})


// Opção 2
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector("button").addEventListener('click', () => {
        document.querySelector('h1').innerText = "Texto do título alterado"
    })
})


// A opção 1 é um pouco melhor pois garante que so seja executado o js quando a pagina estiver completa