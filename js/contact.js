//campos del formulario

const  fieldName= document.querySelector('#nombre');
const  fieldEmail= document.querySelector('#email');
const  fieldPhone= document.querySelector('#telefono');
const  fieldMessage= document.querySelector('#textarea');
//boton de enviar
const btnEnviar = document.querySelector('.btn-enviar');

const regexNombre = /^[a-zA-ZÀ-ÖØ-öø-ÿ' -]+(?: [a-zA-ZÀ-ÖØ-öø-ÿ' -]+)*$/; ///para nombbre completo
const regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const regexMsj = /^[^<>&]*$/;




document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();

    const isValid = validarFormulario();

    if (isValid) {
        this.reset();
    }
});


function validarFormulario(){
    const campos = [

        { field: fieldName, regex: regexNombre, mensajeError: '*complete el campo de Nombre' },
        { field: fieldEmail, regex: regexEmail, mensajeError: '*complete el campo de email' },
        { field: fieldMessage, regex: regexMsj, mensajeError: '*complete el campo de mensaje' },
    ];

    let isValid = true;

    campos.forEach(({field,regex,mensajeError})=>{
        const valor = field.value.trim();
        const errorSpan = field.parentElement.querySelector('.error');

        if (valor.length > 2 && regex.test(valor)) {
            if(errorSpan){
                field.parentElement.removeChild(errorSpan);
            }
            field.style.border = '1px solid #ccc';
        }else{
            if(!errorSpan){
                field.parentElement.insertAdjacentHTML('beforeend',`<span class="error">${mensajeError}</span>`)
            }
            field.style.border = '2px solid red';
            isValid = false;
        }
        return isValid;
    })
}


const validarNumero = (e) =>{
    const campoNumero = e.target;
    const valorNumero = e.target.value;
    const errorSpan = campoNumero.parentElement.querySelector('.error')

    if(!isNaN(valorNumero) && valorNumero.length >=6){
        if(errorSpan){
            campoNumero.parentElement.removeChild(errorSpan);
        }
        campoNumero.style.border = "1px solid #ccc"
    }else{
        if(!errorSpan){
            campoNumero.parentElement.insertAdjacentHTML('beforeend',`
            <span class="error">*ingrese un telefono valido</span>`)
        }
        campoNumero.style.border = "2px solid red"  
    }
};