const arrayRedesFijos = [
    {
        enlace: BASE_URL+'analizadores-de-redes-y-calidad-de-suministro.php',
        title: 'analizadores de redes y calidad de suministro',
        img: BASE_URL+'img/img-producto/circutor/medida-control/analizadores-de-redes-y-calidad-de-suministro.png'
    }
    ,
    {
        enlace:BASE_URL+'analizadores-de-consumo.php',
        title: 'analizadores de consumo',
        img: BASE_URL+'img/img-producto/circutor/medida-control/analizadores-de-consumo.png'
    }
    ,
    {
        enlace:BASE_URL+'analizadores-de-redes.php',
        title: 'analizadores de redes',
        img: BASE_URL+'img/img-producto/circutor/medida-control/analizadores-de-redes.png'
    }
    ,
    {
        enlace:BASE_URL+ 'accesorios.php',
        title: 'Accesorios',
        img: BASE_URL+'img/img-producto/circutor/medida-control/accesorios.png'
    }
]

const arrayTransformadores = [
    {   
        enlace: BASE_URL+'transformadores-de-corriente-en-alterna.php',
        title: 'Transformadores de corriente en alterna',
        img: BASE_URL+'img/img-producto/circutor/transformadores/CT1086BI120_M72_M72_THM.jpg'
    },
    {
        enlace: BASE_URL+'transformador-de-corriente-con-convertidor.php',
        title: 'Transformadores de corriente con convertidor',
        img: BASE_URL+'img/img-producto/circutor/transformadores/CT1087BI123_M73_M73_THM.jpg'
    },
    {
        enlace: BASE_URL+'transformadores-de-corriente-en-continua.php',
        title: 'Transformadores de corriente en contínua',
        img: BASE_URL+'img/img-producto/circutor/transformadores/CT1088BI116_M74_M74_THM.jpg'
    },
    {
        enlace: BASE_URL+'otros-accesorios-de-transformadores.php',
        title: 'Otros accesorios de transformadores',
        img: BASE_URL+'img/img-producto/circutor/transformadores/FO_TransformadoresDeCorrienteyShunts_Quad.jpg'
    }
]

const arrayAutomatizacion = [
    {
        enlace:BASE_URL+'item-automatizacion-y-control/gestor-energetico.php',
        title: 'Gestor energético',
        img: BASE_URL+'img/img-producto/circutor/automatizacion/gestor-energetico.png'
    },
    {
        enlace:BASE_URL+'item-automatizacion-y-control/control-de-maxima-demanda.php',
        title: 'Control de máxima demanda',
        img: BASE_URL+'img/img-producto/circutor/automatizacion/control-de-maxima-demanda.png'
    },
    {
        enlace:BASE_URL+'item-automatizacion-y-control/centralizadores-de-impulsos.php',
        title: 'Centralizadores de impulsos',
        img: BASE_URL+'img/img-producto/circutor/automatizacion/centralizadores-de-impulsos.png'
    },
    {
        enlace:BASE_URL+'item-automatizacion-y-control/accesorios-para-sistema-de-control.php',
        title: 'Accesorios para sistema de control',
        img: BASE_URL+'img/img-producto/circutor/automatizacion/accesorios-de-comunicaciones.jpg'
    },

]

const arrayPortatiles = [
    {
        title: 'CIReQ',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_CIReQ.jpg'
    },
    {
        title: 'Serie Ar5L',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_AR5L.jpg'
    },
    {
        title: 'Serie AR6',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_AR6.jpg'
    },
    {
        title: 'Serie C80',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_C80.jpg'
    },
    {
        title: 'Serie CAVA',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_CAVA.jpg'
    },
    {
        title: 'Serie CIRe+',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_CIR-e-plus.jpg'
    },
    {
        title: 'Serie CIRe3',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_CIRe3.jpg'
    },
    {
        title: 'Serie MYeBOX',
        img: BASE_URL+'img/img-producto/circutor/portatiles/FO_MYeBOX.jpg'
    },
    {
        title: 'VLOG-10',
        img: BASE_URL+'img/img-producto/circutor/portatiles/fo_vlog10.jpg'
    },
]

const template = document.getElementById('template').content;
const fragment = document.createDocumentFragment();




const llamarProductos = (template, arrayProduct, fragment) => {

    arrayProduct.forEach(item => {
        template.querySelector(".btn__product").setAttribute("href", item.enlace);
        template.querySelector(".img__circutor").setAttribute("src", item.img);
        template.querySelector(".img__circutor").setAttribute("alt", item.img);
        template.querySelector(".title").textContent = item.title;

        const clone = document.importNode(template, true);

        fragment.appendChild(clone)
    })

    document.querySelector('.content__item__circutor').appendChild(fragment);
}


// abrir por enlaces de producto circutor   

const linkRedes = document.querySelector('.link-red');
const linkTransformadores = document.querySelector('.link-transformador');
const linkAutomatizacion = document.querySelector('.link-automatizacion');
const linkPortatiles = document.querySelector('.link-analizador');


//ocultar los elementos de todos los productos
function ocularItems() {
    const producto = document.querySelectorAll('#card__product');
    // const items = document.querySelectorAll('.list__circutor');
    producto.forEach(prod =>{
        prod.style.display = 'none';   
    });
}


const actualizarEnlaces = (enlacesSelecionado) => {
    const enlaces = [linkRedes, linkTransformadores, linkAutomatizacion, linkPortatiles];

    enlaces.forEach(enlace => {
        //verificar si es selecionado
        if(enlace === enlacesSelecionado){
            enlace.classList.add('selected');
        }else{
            enlace.classList.remove('selected')
        }
    });
};


linkRedes.addEventListener('click', function (e) {
    e.preventDefault();
    ocularItems();
    llamarProductos(template, arrayRedesFijos, fragment);
    actualizarEnlaces(this);

})
linkTransformadores.addEventListener('click', function (e) {
    e.preventDefault();
    ocularItems();
    llamarProductos(template, arrayTransformadores, fragment);
    actualizarEnlaces(this);

})
linkAutomatizacion.addEventListener('click', function (e) {
    e.preventDefault();
    ocularItems();
    llamarProductos(template, arrayAutomatizacion, fragment);
    actualizarEnlaces(this);
})
linkPortatiles.addEventListener('click', function (e) {
    e.preventDefault();
    ocularItems();
    llamarProductos(template, arrayPortatiles, fragment);
    actualizarEnlaces(this);
})












