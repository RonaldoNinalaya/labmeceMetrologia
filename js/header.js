const btnAbrir = document.querySelector('#abrir');
const btnCerrrar = document.querySelector('#cerrar')

const listasNav = document.querySelector('#item-list');


btnAbrir.addEventListener('click', () => {
  listasNav.classList.add('visible')
  
})

btnCerrrar.addEventListener('click', () => {
  listasNav.classList.remove('visible')
})