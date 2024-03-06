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


const validarcanmpo = (field, regex, mensajeError) => {
    const valor = field.value;
    console.log(valor);
    const errorSpan = field.parentElement.querySelector('.error')
    

    if(valor.length > 5 && regex.test(valor) ){
        
        if(errorSpan){
            field.parentElement.removeChild(errorSpan);
        }
        field.style.border = "1px solid #ccc"
    }else{
        if(!errorSpan){
            field.parentElement.insertAdjacentHTML("beforeend",
            `<span class="error">${mensajeError}</span>`);
        }
        
        field.style.border = "2px solid red"
    }
};

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
}   

fieldName.addEventListener('blur', () => validarcanmpo(fieldName,regexNombre,'*complete el campo de Nombre'));
fieldEmail.addEventListener('blur', () => validarcanmpo(fieldEmail,regexEmail, '*complete el campo de email'));
fieldMessage.addEventListener('blur', () => validarcanmpo(fieldMessage,regexMsj ,'*complete el campo de mensaje'));
fieldPhone.addEventListener('blur', validarNumero);


btnEnviar.addEventListener('click', (e) =>{
    e.preventDefault();

    validarcanmpo(fieldName, regexNombre, '*complete el campo de Nombre');
    validarcanmpo(fieldEmail, regexEmail, '*complete el campo de email');
    validarcanmpo(fieldMessage, regexMsj, '*complete el campo de mensaje');
    validarNumero();

    fieldName.value = '';
    fieldEmail.value = '';
    fieldMessage.value = '';
    fieldPhone.value = '';
})

