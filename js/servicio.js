const abrirlModalElectronica = document.querySelector('#btn__electricidad');
const abrirModaTemperatura = document.querySelector('#btn__temperatura');
const abrirModaLongitud = document.querySelector('#btn__longitud');
const abrirModalMasa = document.querySelector('#btn__masa');
const abrirModalFuerza = document.querySelector('#btn__fuerza');
const abrirModalMag = document.querySelector('#btn__otrasMagnitudes');

// contenedor de modal
const modalElectrica = document.querySelector('.modal');
const modalTemperatura = document.querySelector('.modal__temperatura');
const modalLongitud = document.querySelector('.modal__longitud');
const modalMasa = document.querySelector('.modal__masa');
const modalFuerza = document.querySelector('.modal__fuerza');
const modalMag = document.querySelector('.modal__otrasMagnitudes');

// boto de cerrar el modal
const modalCerrar = document.querySelector('#btn__cerrar');
const modalCerrarTemp = document.querySelector('#btn__cerrar--temperatura');
const modalCerrarLong = document.querySelector('#btn__cerrar--longitud');
const modalCerrarMasa = document.querySelector('#btn__cerrar--masa');
const modalCerrarFuerza = document.querySelector('#btn__cerrar--fuerza');
const modalCerrarMag = document.querySelector('#btn__cerrar--otrasMag');


function togggleModal(modal) {
    modal.classList.toggle('modal--visible');
}

//modal de Electrica

abrirlModalElectronica.addEventListener('click', function () {
    // modalElectrica.classList.add('modal--visible')
    togggleModal(modalElectrica);
    
    
});

modalCerrar.addEventListener('click', function () {
    // modalElectrica.classList.remove('modal--visible');
    togggleModal(modalElectrica);
});


//modal de temperatura

abrirModaTemperatura.addEventListener('click', function () {
    // modalTemperatura.classList.add('modal--visible')
    togggleModal(modalTemperatura);
});

modalCerrarTemp.addEventListener('click', function () {
    // modalTemperatura.classList.remove('modal--visible');
    togggleModal(modalTemperatura);
});

//modal de longitud

abrirModaLongitud.addEventListener('click',function(){
    // modalLongitud.classList.add('modal--visible')
    togggleModal(modalLongitud);
})

modalCerrarLong.addEventListener('click',function(){
    // modalLongitud.classList.remove('modal--visible')
    togggleModal(modalLongitud);
})

//modal de masa

abrirModalMasa.addEventListener('click', function(){
    togggleModal(modalMasa);
})

modalCerrarMasa.addEventListener('click', function(){
    togggleModal(modalMasa);
})


//modal de fuerza

abrirModalFuerza.addEventListener('click', function(){
    togggleModal(modalFuerza);
})

modalCerrarFuerza.addEventListener('click', function(){
    togggleModal(modalFuerza);
})

abrirModalMag.addEventListener('click', function(){
    togggleModal(modalMag);
})

modalCerrarMag.addEventListener('click', function(){
    togggleModal(modalMag)
})
