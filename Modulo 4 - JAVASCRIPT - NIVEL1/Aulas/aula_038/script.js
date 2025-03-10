/* 
OBJETIVO:
Adicionar 3 eventos click, um para cada elemento dentro do body 
cada um vai apresentar um texto único na consola
e fazer com que sejam independentes uns dos outros.
(Propagation)
*/

let section = document.querySelector('section')
let article = section.querySelector('article')
let div = document.querySelector('div')

section.addEventListener('click', (event) => {
    event.stopPropagation()
    console.log('section')
})

article.addEventListener('click', (event) => {
    event.stopPropagation()
    console.log('article')
})

div.addEventListener('click', (event) => {
    event.stopPropagation()
    console.log('div')
})
