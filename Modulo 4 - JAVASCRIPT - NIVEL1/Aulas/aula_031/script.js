// APLICAR ESTILOS INLINE COM JAVASCRIPT


let el = document.querySelector ("p")
const estilos = window.getComputedStyle (el)
console.log (estilos.getPropertyValue('color'))