const btnAbrir = document.querySelector('#abrir');
const btnCerrrar = document.querySelector('#cerrar')

const listasNav = document.querySelector('#item-list');


btnAbrir.addEventListener('click', () => {
  listasNav.classList.add('visible')

})

btnCerrrar.addEventListener('click', () => {
  listasNav.classList.remove('visible')
})

//sub menu de responsibe para moviles
const linkProducto = document.querySelector('.list--producto');
const subMenu = document.querySelector('.sub_nav__item--producto')
const arrow = document.querySelector('.arrow_open')

function mostrarMenu (mostrar){
  if(mostrar === 'none'){
    arrow.style.transform = 'rotate(-180deg)';
    
  }else{
    arrow.style.transform = 'rotate(0)';
  }
}

linkProducto.addEventListener('click', function (e) {
  //Evita que el clic se propague al documento y active el evento de cierre
  e.stopPropagation();
  

  const estilosDisplay = getComputedStyle(subMenu).display;
  subMenu.style.display = (estilosDisplay === 'none') ? 'block' : 'none';
  mostrarMenu(estilosDisplay);
})

//su funcion es cerrar el sub menu si hace click en otra parte de la pantalla
document.addEventListener('click', function (e) {
  if (!subMenu.contains(e.target)) {
    subMenu.style.display = 'none';
    arrow.style.transform = 'rotate(0)';
  }
  
});

//contenedor de circutor

const abrirCircutor = document.querySelector('.sub_nav__item--circutor');
const itemCircutor = document.querySelector('.list__sub--producto') 


itemCircutor.addEventListener('click', function(e){

  const ventenaMovil = window.innerWidth;
  const abircampocircutor = getComputedStyle(abrirCircutor).display;

  if(ventenaMovil <= 660){
    e.stopPropagation();
    abrirCircutor.style.display = (abircampocircutor === 'none' || abircampocircutor === '') ? 'block' : 'none';
  }
  

});


