

const url = './alquileres.json';

fetch(url).then(resp => resp.json())
    .then(data => mostrarAlquiler(data))
    .catch(error => console.log('Errror al obtener los datos' + error));

function mostrarAlquiler(alquileres) {
    const contenedor = document.getElementById('servicio-alquiler')


    alquileres.forEach(alquiler => {
        const divAlquiler = document.createElement('div');
        divAlquiler.classList.add('item__alquiler');
        
        //contendor de la imgen del producto de alquiler
        const imgAlquiler = document.createElement('img');
        imgAlquiler.src= alquiler.imagen

        //contenedor de la informacion


        const contentInfo = document.createElement('div');
        contentInfo.classList.add('info__container');



        //nombre del producto de alquiler
        const titleAlquiler = document.createElement('h2');
        titleAlquiler.classList.add('title__alquiler');
        titleAlquiler.textContent = alquiler.nombre

        //contendor de modelo de alquiler
        const modeloAlquiler = document.createElement('p');

        modeloAlquiler.classList.add('parrafo__modelo');
        
        modeloAlquiler.textContent = 'Modelo: ' + alquiler.modelo ;  

        //contenedor de marca

        const marcaAlquiler = document.createElement('p');

        marcaAlquiler.classList.add('parrafo__marca');
        marcaAlquiler.textContent = 'Marca' + alquiler.marca

        //contendor de descripcion

        const descAlquiler = document.createElement('p');
        descAlquiler.classList.add('descrip__alquiler');
        descAlquiler.textContent = alquiler.descripcion

        contenedor.appendChild(divAlquiler)

        //contenedor de cosultarnos

        const btnAlquiler = document.createElement('a')
        btnAlquiler.classList.add('cta__alquiler-equipo');
        btnAlquiler.textContent = 'Consúltenos';
        btnAlquiler.href = 'https://wa.link/vnbx5v';
        btnAlquiler.target = '_blank';




        divAlquiler.appendChild(imgAlquiler);

        
        // contentInfo.appendChild(titleAlquiler);
        // contentInfo.appendChild(modeloAlquiler);
        // contentInfo,appendChild(marcaAlquiler);
        // contentInfo.appendChild(btnAlquiler); 

        divAlquiler.appendChild(contentInfo);
        contentInfo.appendChild(titleAlquiler);
        contentInfo.appendChild(modeloAlquiler);
        contentInfo.appendChild(marcaAlquiler);
        contentInfo.appendChild(descAlquiler);
        contentInfo.appendChild(btnAlquiler);

        

      

              
        
        
    });
}

